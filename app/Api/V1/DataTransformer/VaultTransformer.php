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
			if (LoanScheme::where('name', $item['loanSchemeId'])->count() === 0) {
				\Log::info(sprintf('can\'t find loan scheme "%s"', $item['loanSchemeId']));
				continue;
			}

            $data[] = [
                'vaultId'            => $item['vaultId'],
                'loanSchemeId'       => LoanScheme::where('name', $item['loanSchemeId'])->first()->id,
                'ownerAddress'       => $item['ownerAddress'],
                'state'              => $item['state'],
                'collateralAmounts'  => json_encode($item['collateralAmounts'] ?? []),
                'loanAmounts'        => json_encode($item['loanAmounts'] ?? []),
                'interestAmounts'    => json_encode($item['interestAmounts'] ?? []),
                'collateralValue'    => $item['collateralValue'] ?? null,
                'loanValue'          => $item['loanValue'] ?? null,
                'interestValue'      => (float)($item['interestValue'] ?? null),
                'informativeRatio'   => (float)($item['informativeRatio'] ?? null),
                'collateralRatio'    => isset($item['collateralRatio'])
                    ? (int)Str::replace('%', '', $item['collateralRatio'])
                    : null,
                'liquidationHeight'  => (int)($item['liquidationHeight'] ?? null),
                'batchCount'         => (int)($item['batchCount'] ?? null),
                'liquidationPenalty' => (int)($item['liquidationPenalty'] ?? null),
                'batches'            => json_encode($item['batches'] ?? []),
                'updated_at'         => now(),
            ];
        }
        Vault::upsert($data, ['vaultId']);

        return true;
    }
}
