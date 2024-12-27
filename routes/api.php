<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('products', [MenuController::class, 'index']);
Route::post('products', [MenuController::class, 'store']);
Route::post('products/{id}', [MenuController::class, 'show']);
Route::put('products/{id}', [MenuController::class, 'update']);
Route::delete('products/{id}', [MenuController::class, 'destroy']);