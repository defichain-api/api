<?php

namespace App\Api\V1\Requests;

use App\Http\Requests\ApiRequest;

class FixedIntervalPriceRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            '*.priceFeedId' => ['required', 'string'],
            '*.activePrice' => ['required', 'numeric'],
            '*.nextPrice'   => ['required', 'numeric'],
            '*.timestamp'   => ['required'],
            '*.isLive'      => ['required', 'bool'],
        ];
    }

    public function authorize(): bool
    {
        return $this->header('x-auth-key') === config('external_auth.x-auth-key');
    }
}
