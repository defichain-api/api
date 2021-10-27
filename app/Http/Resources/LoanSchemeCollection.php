<?php

namespace App\Http\Resources;

use App\Models\LoanScheme;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\LoanScheme */
class LoanSchemeCollection extends ResourceCollection
{
    public $resource = LoanSchemeResource::class;

    public function toArray($request): array
    {
        return [
            'data'  => $this->collection,
            'stats' => [
                'count_schemes' => $this->collection->count(),
                'schemes_used'  => $this->loanSchemeStats(),
            ],
        ];
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
}
