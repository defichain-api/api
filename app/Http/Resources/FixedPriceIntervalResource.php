<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\FixedIntervalPrice */
class FixedPriceIntervalResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'priceFeedId' => $this->priceFeedId,
            'activePrice' => $this->activePrice,
            'nextPrice'   => $this->nextPrice,
            'timestamp'   => $this->timestamp,
            'valid_from'  => $this->validFromTimeString,
            'isLive'      => (bool)$this->isLive,
        ];
    }
}
