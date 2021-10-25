<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

/** @see \App\Models\LoanScheme */
class LoanSchemeCollection extends ResourceCollection
{
    public $resource = LoanSchemeResource::class;

    public function toArray($request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'count_schemes' => $this->collection->count(),
            ],
        ];
    }
}
