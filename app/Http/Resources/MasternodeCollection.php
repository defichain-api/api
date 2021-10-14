<?php

namespace App\Http\Resources;

use App\Api\Enum\MasternodeStates;
use App\Models\Masternode;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @see \App\Models\Masternode
 * @codeCoverageIgnore
 */
class MasternodeCollection extends ResourceCollection
{
    public $resource = MasternodeResource::class;
    protected bool $withStats;
    protected bool $withWtf;

    public function __construct($resource, bool $withStats = true, bool $withWtf = false)
    {
        parent::__construct($resource);
        $this->withStats = $withStats;
        $this->withWtf = $withWtf;
    }

    public function toArray($request): array
    {
        return [
            'data' => $this->collection,
            $this->mergeWhen($this->withStats, [
                'stats' => $this->generateStats(),
            ]),
            $this->mergeWhen($this->withWtf, [
                'wtf' => $this->generateWtf(),
            ]),
        ];
    }

    protected function generateStats(): array
    {
        return cache()->remember('masternode_stats', now()->addMinutes(10), function () {
            $allMasternodes = Masternode::all();

            return [
                'masternode_count'   => $allMasternodes->count(),
                'enabled_count'      => $allMasternodes->where('state', MasternodeStates::ENABLED)->count(),
                'pre_enabled_count'  => $allMasternodes->where('state', MasternodeStates::PRE_ENABLED)->count(),
                'resigned_count'     => $allMasternodes->where('state', MasternodeStates::RESIGNED)->count(),
                'pre_resigned_count' => $allMasternodes->where('state', MasternodeStates::PRE_RESIGNED)->count(),
                'freezer'            => [
                    'unfrozen' => $allMasternodes->whereIn('state', MasternodeStates::ACTIVE_STATES)->where('timelock',
                        null)
                        ->count(),
                    '5_year'   => $allMasternodes->whereIn('state', MasternodeStates::ACTIVE_STATES)
                        ->where('timelock', '5 years')
                        ->count(),
                    '10_year'  => $allMasternodes->whereIn('state', MasternodeStates::ACTIVE_STATES)
                        ->where('timelock', '10 years')
                        ->count(),
                ],
            ];
        });
    }

    protected function generateWtf(): array
    {
        return (array)__('api/masternode_wtf');
    }
}
