<?php

use App\Http\Controllers\SportsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/info', function () {
    return 'Fillipe Ferrer de Almeida 3468';
});

Route::apiResource('/sports', SportsController::class);
