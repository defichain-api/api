<?php

namespace App\Api\V1\DataTransformer;

use App\Models\LoanScheme;
use App\Models\Vault;
use Str;

class VaultTransformer
{
    protected array $data;

    public function init(array $data): VaultTransformer
    {
        $this->data = $data;

        return $this;
    }

    public function store(): bool
    {
        $data = [];
        foreach ($this->data as $item) {
            $data[] = [
                'vaultId'           => $item['vaultId'],
                'loanSchemeId'      => LoanScheme::where('name', $item['loanSchemeId'])->first()->id,
                'ownerAddress'      => $item['ownerAddress'],
                'state'             => $item['state'],
                'collateralAmounts' => json_encode($item['collateralAmounts'] ?? []),
                'loanAmounts'       => json_encode($item['loanAmounts'] ?? []),
                'interestAmounts'   => json_encode($item['interestAmounts'] ?? []),
                'collateralValue'   => $item['collateralValue'],
                'loanValue'         => $item['loanValue'],
                'interestValue'     => (float)$item['interestValue'],
                'informativeRatio'  => (float)$item['informativeRatio'],
                'collateralRatio'   => (int)Str::replace('%', '', $item['collateralRatio']),
                'updated_at'        => now(),
            ];
        }
        Vault::upsert($data, ['vaultId']);

        return true;
    }
}
