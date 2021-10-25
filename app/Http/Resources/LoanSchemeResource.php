<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\LoanScheme */
class LoanSchemeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'name'                   => $this->name,
            'minCollaterationRatio'  => $this->minCollaterationRatio,
            'interestRate'           => $this->interestRate,
            'isDefault'              => (bool)$this->isDefault,
            'countVaultsUsingScheme' => $this->vaults->count(),
        ];
    }
}
