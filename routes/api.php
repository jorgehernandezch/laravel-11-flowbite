<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [UserController::class, 'store']);
    // Route::post('password', [AuthController::class, 'password']);
    // Route::post('password-reset', [AuthController::class, 'passwordReset']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('users', UserController::class);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});
