<?php

use App\Http\Controllers\Docs\DocsController;
use App\Http\Controllers\Docs\V1\DocsController as DocsV1Controller;

Route::get('/', [DocsController::class, 'getOverview'])
    ->name('overview');

Route::middleware(['web'])
    ->prefix('v1')
    ->name('v1.')
    ->group(function () {
        Route::get('/', [DocsV1Controller::class, 'docs'])
            ->name('start');

        Route::get('changelog', [DocsV1Controller::class, 'changelog'])
            ->name('changelog');
    });
