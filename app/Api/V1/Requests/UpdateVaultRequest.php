<?php

namespace App\Api\V1\Requests;

use App\Api\Enum\VaultStates;
use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;

class UpdateVaultRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            '*.vaultId'           => ['required', 'string'],
            '*.loanSchemeId'      => ['required', 'string'],
            '*.ownerAddress'      => ['required', 'string'],
            '*.state'             => ['required', 'string', Rule::in(VaultStates::ALL)],
            '*.collateralAmounts' => ['sometimes', 'array'],
            '*.loanAmounts'       => ['sometimes', 'array'],
            '*.interestAmounts'   => ['sometimes', 'array'],
            '*.collateralValue'   => ['required', 'numeric'],
            '*.loanValue'         => ['required', 'numeric'],
            '*.interestValue'     => ['sometimes'],
            '*.informativeRatio'  => ['required', 'numeric'],
            '*.collateralRatio'   => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return $this->header('x-auth-key') === config('external_auth.x-auth-key');
    }
}
