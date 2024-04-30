<?php

// use App\Http\Controllers\BasketController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ProductsController;
// use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

// Route::get('shop', [ShopController::class, 'index']);

// Route::get('shop/products/{product}', [ProductsController::class, 'show']);
// Route::get('shop/products', [ProductsController::class, 'index']);

// Route::get('contact', [ContactController::class, 'index']);
// Route::post('contact', [ContactController::class, 'create']);