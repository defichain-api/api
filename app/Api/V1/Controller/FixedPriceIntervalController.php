<?php

namespace App\Api\V1\Controller;

use App\Api\V1\DataTransformer\FixedIntervalPriceTransformer;
use App\Api\V1\Requests\FixedIntervalPriceRequest;
use App\Http\Resources\FixedPriceIntervalCollection;
use App\Models\FixedIntervalPrice;
use Illuminate\Http\JsonResponse;

class FixedPriceIntervalController
{
    const MAX_PAGESIZE = 100;

    /**
     * list Fixed Price Intervals
     *
     * Get a list of all Fixed Price Intervals.
     * @group        Fixed Price Intervals
     * @responseFile storage/app/docu_responses/fixed_interval_price.json
     */
    public function list(): FixedPriceIntervalCollection
    {
        return cache()->remember('fixed_price_intervals', now()->addSecond(), function () {
            return new FixedPriceIntervalCollection(FixedIntervalPrice::paginate(self::MAX_PAGESIZE));
        });
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(FixedIntervalPriceRequest $request, FixedIntervalPriceTransformer $transformer): JsonResponse
    {
        $transformer->init($request->validated())->store();

        return response()->json([
            'message'        => 'updated fixed price intervals',
            'items_received' => count($request->validated()),
        ], JsonResponse::HTTP_OK);
    }
}
