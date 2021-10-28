<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\FixedIntervalPrice */
class FixedPriceIntervalCollection extends ResourceCollection
{
	public function toArray($request): array
	{
		return [
			'data' => $this->collection,
            'stats' => [
                'count_prices' => $this->collection->count(),
            ],
		];
	}
}
