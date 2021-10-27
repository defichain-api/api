<?php

namespace App\Http\Resources;

use App\Models\LoanScheme;
use App\Models\Vault;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\Vault */
class VaultCollection extends ResourceCollection
{
    public $resource = VaultResource::class;
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
        return cache()->remember('vault_stats', now()->addMinutes(10), function () {
            return [
                'count'                   => Vault::count(),
                'count_under_liquidation' => Vault::where('isUnderLiquidation', true)->count(),
                'schemes_used'            => $this->loanSchemeStats(),
                'sum_collateral_value'    => Vault::sum('collateralValue'),
                'sum_loan_value'          => Vault::sum('loanValue'),
            ];
        });
    }

    protected function loanSchemeStats(): array
    {
        return cache()->remember('loan_schemes_used', now()->addMinutes(15), function () {
            $loanSchemes = LoanScheme::all();
            $stats = [];
            $loanSchemes->each(function (LoanScheme $loanScheme) use (&$stats) {
                $stats[$loanScheme->name] = $loanScheme->vaults->count();
            });

            return $stats;
        });
    }

    protected function generateWtf(): array
    {
        return [];
    }
}
