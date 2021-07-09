<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class PricesController extends Controller
{

    /**
     * Returns a list of all available price pairs including their current or
     * historic prices
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPriceOverview(String $date = null): JsonResponse
    {
        return response()->json([
            'time_utc' => '2021-07-09T09:55:02.000000Z',
            'time_local' => [
                'zone' => 'GMT+2',
                'time' => '2021-07-09T11:55:02.000000Z',
            ],
            'dfi' => [
                'wtf'   => '1 DFI will give you...',
                'usdt'  => 2.2,
                'btc'   => 0.00006681,
                'eth'   => 0.00103204,
            ],
            'usdt' => [
                'wtf'   => '1 USDT will give you...',
                'dfi'  => 0.45358444,
            ],
            'btc' => [
                'wtf'   => '1 BTC will give you...',
                'dfi'  => 14967.58969084,
            ],
            'eth' => [
                'wtf'   => '1 ETH will give you...',
                'dfi'  => 0.45358444,
            ],
        ], JsonResponse::HTTP_OK);
    }


    public function getPrice(String $from, String $to, String $date = null): JsonResponse
    {
        // do
    }
}
