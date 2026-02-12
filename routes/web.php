<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InfoController;

Route::prefix('info')->group(function () {
    Route::get('/', [InfoController::class, 'index']);
    Route::get('/client', [InfoController::class, 'client']);
    Route::get('/server', [InfoController::class, 'server']);
    Route::get('/database', [InfoController::class, 'database']);
});
