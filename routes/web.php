<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('shop', [ShopController::class, 'index']);

Route::get('shop/products/{product}', [ProductsController::class, 'show']);
Route::get('shop/products', [ProductsController::class, 'index']);