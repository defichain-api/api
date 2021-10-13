<?php

use App\Api\Enum\MasternodeStates;
use App\Api\V1\Controller\MasternodeController;
use App\Api\V1\Controller\PingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PingController::class, 'getPing'])
    ->name('start');

Route::get('ping', [PingController::class, 'getPing'])
    ->name('ping');

Route::prefix('masternode')
    ->name('masternode.')
    ->group(function () {
        Route::get('/', [MasternodeController::class, 'activePaginated'])
            ->name('activePaginated')
            ->middleware(['paginated']);
        Route::get('{state}', [MasternodeController::class, 'statePaginated'])
            ->name('statePaginated')
            ->where('state', MasternodeStates::toString())
            ->middleware(['paginated']);
        Route::get('/with_inactive', [MasternodeController::class, 'allPaginated'])
            ->name('allPaginated')
            ->middleware(['paginated']);
    });
