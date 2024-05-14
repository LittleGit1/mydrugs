<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('shop', [ShopController::class, 'index']);
Route::get('shop/products/{product}', [ShopController::class, 'show']);
Route::get('shop/products', [ShopController::class, 'products']);

