<?php

namespace App\Api\V1\DataTransformer;

use App\Models\FixedIntervalPrice;
use Carbon\Carbon;

class FixedIntervalPriceTransformer
{
    protected array $data;

    public function init(array $data): FixedIntervalPriceTransformer
    {
        $this->data = $data;

        return $this;
    }

    public function store(): bool
    {
        foreach ($this->data as $item) {
            FixedIntervalPrice::updateOrCreate([
                'priceFeedId' => $item['priceFeedId'],
            ], [
                'activePrice' => $item['activePrice'],
                'nextPrice'   => $item['nextPrice'],
                'timestamp'   => Carbon::parse($item['timestamp']),
                'isLive'      => $item['isLive'],
            ]);
        }

        return true;
    }
}
