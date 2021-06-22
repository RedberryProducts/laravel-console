<?php

use Illuminate\Support\Facades\Route;
use Redberry\LaravelConsole\LogsController;

Route::prefix('laravel-console')->group(function() {
    Route::get('/', [LogsController::class, 'getCurrentLogs']);
    Route::get('/forget', [LogsController::class, 'forget']);
});
