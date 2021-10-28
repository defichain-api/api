<?php

namespace App\Api\V1\Requests;

use App\Http\Requests\ApiRequest;

class UpdateVaultRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            '*.vaultId'           => ['required', 'string'],
            '*.loanSchemeId'      => ['required', 'string'],
            '*.ownerAddress'      => ['required', 'string'],
            '*.state'             => ['required', 'string'],
            '*.collateralAmounts' => ['required', 'array'],
            '*.loanAmounts'       => ['required', 'array'],
            '*.interestAmounts'   => ['required', 'array'],
            '*.collateralValue'   => ['required', 'numeric'],
            '*.loanValue'         => ['required', 'numeric'],
            '*.interestValue'     => ['sometimes'],
            '*.currentRatio'      => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return $this->header('x-auth-key') === config('external_auth.x-auth-key');
    }
}
