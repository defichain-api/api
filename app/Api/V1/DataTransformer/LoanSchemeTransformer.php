<?php

namespace App\Api\V1\DataTransformer;

use App\Models\LoanScheme;

class LoanSchemeTransformer
{
    protected array $data;

    public function init(array $data): LoanSchemeTransformer
    {
        $this->data = $data;

        return $this;
    }

    public function store(): bool
    {
        foreach ($this->data as $item) {
            LoanScheme::updateOrCreate([
                'name' => $item['id'],
            ], [
                'minCollaterationRatio' => $item['mincolratio'],
                'interestRate'          => $item['interestrate'],
                'isDefault'             => $item['default'],
            ]);
        }

        return true;
    }
}
