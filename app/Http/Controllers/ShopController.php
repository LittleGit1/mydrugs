<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Routing\Controller;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop/index', ['product_categories' => ProductCategory::all()]);
    }
}
