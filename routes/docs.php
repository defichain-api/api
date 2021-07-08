<?php

use App\Http\Controllers\Docs\ChangelogController;
use App\Http\Controllers\Docs\DocsController;

        Route::get('/', [DocsController::class, 'docs'])
            ->name('index');

        Route::get('changelog', [ChangelogController::class, 'changelog'])
            ->name('changelog');
