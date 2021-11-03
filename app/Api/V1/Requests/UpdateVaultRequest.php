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
            '*.vaultId'            => ['required', 'string'],
            '*.loanSchemeId'       => ['required', 'string'],
            '*.ownerAddress'       => ['required', 'string'],
            '*.state'              => ['required', 'string', Rule::in(VaultStates::ALL)],
            '*.collateralAmounts'  => ['sometimes', 'array'],
            '*.loanAmounts'        => ['sometimes', 'array'],
            '*.interestAmounts'    => ['sometimes', 'array'],
            '*.collateralValue'    => ['required_unless:*.state,inLiquidation', 'numeric'],
            '*.loanValue'          => ['required_unless:*.state,inLiquidation', 'numeric'],
            '*.interestValue'      => ['sometimes'],
            '*.informativeRatio'   => ['required_unless:*.state,inLiquidation', 'numeric'],
            '*.collateralRatio'    => ['required_unless:*.state,inLiquidation', 'numeric'],
            '*.liquidationHeight'  => ['required_if:*.state,inLiquidation', 'numeric'],
            '*.batchCount'         => ['required_if:*.state,inLiquidation', 'numeric'],
            '*.liquidationPenalty' => ['required_if:*.state,inLiquidation', 'numeric'],
            '*.batches'            => ['required_if:*.state,inLiquidation', 'array'],
        ];
    }

    public function authorize(): bool
    {
        return $this->header('x-auth-key') === config('external_auth.x-auth-key');
    }
}
