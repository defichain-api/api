<?php

namespace App\Api\V1\Requests;

use App\Http\Requests\ApiRequest;

class UpdateLoanSchemeRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            '*.id'           => ['required', 'string'],
            '*.mincolratio'  => ['required', 'integer', 'between:150,1000'],
            '*.interestrate' => ['required', 'numeric', 'between:0,99.99'],
            '*.default'      => ['required', 'bool'],
        ];
    }

    public function authorize(): bool
    {
        return $this->header('x-auth-key') === config('external_auth.x-auth-key');
    }
}
