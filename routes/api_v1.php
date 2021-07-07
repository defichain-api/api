<?php

use App\Api\V1\Controller\PingController;
use Illuminate\Support\Facades\Route;

Route::get('ping', [PingController::class, 'getPing'])
    ->name('ping');
