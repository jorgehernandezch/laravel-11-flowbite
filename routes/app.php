<?php

use App\Http\Controllers\App\IndexController;
use App\Http\Controllers\App\ProfileController;
use App\Http\Controllers\App\UserController;
use App\Http\Controllers\App\CelulaController;
use Illuminate\Support\Facades\Route;

Route::name('app.')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::name('profile.')->prefix('profile')->controller(ProfileController::class)->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    Route::resources([
        'users' => UserController::class,
        'celulas' => CelulaController::class,
    ]);
});
