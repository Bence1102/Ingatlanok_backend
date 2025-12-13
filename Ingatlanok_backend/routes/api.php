<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/kategoria', [KategoriaController::class, 'index']);
Route::get('/ingatlanok', [IngatlanokController::class, 'index']);