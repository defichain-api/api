<?php

use App\Api\V1\Controller\IndexController;
use App\Api\V1\Controller\PingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'getIndex'])
    ->name('index');

Route::get('ping', [PingController::class, 'getPing'])
    ->name('ping');
