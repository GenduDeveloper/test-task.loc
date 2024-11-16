<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CarBrandController;
use App\Http\Controllers\Api\V1\CarModelController;

Route::get('/brands', [CarBrandController::class, 'index'])
    ->name('brands.index');

Route::get('/models', [CarModelController::class, 'index'])
    ->name('models.index');


