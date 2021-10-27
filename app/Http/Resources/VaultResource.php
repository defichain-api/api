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
			'loadSchemeId'       => $this->loanScheme->name,
			'ownerAddress'       => $this->ownerAddress,
			'isUnderLiquidation' => $this->isUnderLiquidation,
			'invalidPrice'       => $this->invalidPrice,
			'collateralAmounts'  => $this->collateralAmounts,
			'loanAmounts'        => $this->loanAmounts,
			'interestAmounts'    => $this->interestAmounts,
			'collateralValue'    => $this->collateralValue,
			'loanValue'          => $this->loanValue,
			'currentRatio'       => $this->currentRatio,
		];
	}
}
