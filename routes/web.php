<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', [CarController::class, 'home']);
Route::get('/cars', [CarController::class, 'cars']);
Route::get('/about', [CarController::class, 'about']);
