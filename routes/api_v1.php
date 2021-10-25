<?php

use App\Api\Enum\MasternodeStates;
use App\Api\V1\Controller\LoanSchemeController;
use App\Api\V1\Controller\MasternodeController;
use App\Api\V1\Controller\IndexController;
use App\Api\V1\Controller\PingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'getIndex'])
    ->name('index');

Route::get('ping', [PingController::class, 'getPing'])
    ->name('ping');

Route::prefix('masternodes')
    ->name('masternode.')
    ->group(function () {
        Route::get('/', [MasternodeController::class, 'activeMasternodesPaginated'])
            ->name('activePaginated')
            ->middleware(['paginated']);
        Route::get('{state}', [MasternodeController::class, 'stateMasternodesPaginated'])
            ->name('statePaginated')
            ->where('state', MasternodeStates::toString())
            ->middleware(['paginated']);
        Route::get('with_inactive', [MasternodeController::class, 'allMasternodesPaginated'])
            ->name('allPaginated')
            ->middleware(['paginated']);

        Route::get('address/{address}', [MasternodeController::class, 'address'])
            ->name('address');

        Route::get('all', [MasternodeController::class, 'activeMasternodes'])
            ->name('active.all');
        Route::get('{state}/all', [MasternodeController::class, 'stateMasternodes'])
            ->name('state.all')
            ->where('state', MasternodeStates::toString());
        Route::get('with_inactive/all', [MasternodeController::class, 'allMasternodes'])
            ->name('allMasternodes');
    });

Route::prefix('vault')
    ->name('vault.')
    ->group(function () {

    });

Route::prefix('loan_schemes')
    ->name('loan_schemes.')
    ->group(function () {
        Route::get('/', [LoanSchemeController::class, 'list'])
            ->name('list');
        Route::post('update', [LoanSchemeController::class, 'update'])
            ->name('update');
    });
