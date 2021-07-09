<?php

use App\Api\V1\Controller\PingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PingController::class, 'getPing'])
    ->name('start');

Route::get('ping', [PingController::class, 'getPing'])
    ->name('ping');

// All /prices/ routes
Route::prefix('prices')
    ->name('prices.')
    ->group(function () {

        /**
         * Example 1: https://defichain-api.io/v1/prices/ => No date results to NOW
         * Example 2: https://defichain-api.io/v1/prices/2021-07-08T13:37:00
         */
        Route::get('/{?DATE}', [PricesController::class, 'getPriceOverview'])
            ->name('overview');

        /**
         * Example 1: https://defichain-api.io/v1/prices/DFI/USDT/ => No date results to NOW
         * Example 2: https://defichain-api.io/v1/prices/DFI/USDT/2021-07-08T13:37:00
         */
        Route::get('/{FROM}/{TO}/{?DATE}', [PricesController::class, 'getPrice'])
            ->name('price');
});
