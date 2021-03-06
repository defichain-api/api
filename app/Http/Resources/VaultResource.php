<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Vault */
class VaultResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'vaultId'            => $this->vaultId,
            'loanSchemeId'       => $this->loanScheme->name,
            'ownerAddress'       => $this->ownerAddress,
            'state'              => $this->state,
            'collateralAmounts'  => $this->collateralAmounts,
            'loanAmounts'        => $this->loanAmounts,
            'interestAmounts'    => $this->interestAmounts,
            'collateralValue'    => $this->collateralValue,
            'loanValue'          => $this->loanValue,
            'interestValue'      => $this->interestValue,
            'informativeRatio'   => $this->informativeRatio,
            'collateralRatio'    => $this->collateralRatio,
            'liquidationHeight'  => $this->liquidationHeight,
            'batchCount'         => $this->batchCount,
            'liquidationPenalty' => $this->liquidationPenalty,
            'batches'            => $this->batches,
        ];
    }
}
