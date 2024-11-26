<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CarBrandController;
use App\Http\Controllers\Api\V1\CarModelController;
use App\Http\Controllers\Api\V1\CarController;

Route::get('/brands', [CarBrandController::class, 'index'])
    ->name('brands.index');

Route::get('/models', [CarModelController::class, 'index'])
    ->name('models.index');

Route::apiResource('cars', CarController::class);
