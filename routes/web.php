<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('accounts/login', [AccountController::class, 'login']);

Route::post('accounts/dologin', [AccountController::class, 'dologin']);

Route::post('accounts/player', [PlayerController::class, 'player']);

Route::get('accounts/showPlayer', [PlayerController::class, 'showPlayer']);

Route::get('accounts/index/{account_id?}', [AccountController::class, 'index']);
