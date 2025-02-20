<?php

use App\Http\Controllers\App\IndexController;
use App\Http\Controllers\App\UserController;
use Illuminate\Support\Facades\Route;

Route::name('app.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::resources([
        'users' => UserController::class,
    ]);
});
