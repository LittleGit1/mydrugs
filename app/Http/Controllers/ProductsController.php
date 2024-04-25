<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $products = [];

        if (request()->query('category') && !request()->query('subcategory')) {
            $parentId = ProductCategory::all()
                ->where('slug', '=', request()->query('category'))
                ->first()->id;

            $products = ProductSubcategory::with('parentCategory')
                ->where([['product_category_id', '=', $parentId]])
                ->get();

            return view('shop/show', ['product_subcategories' => $products]);
        }

        $subId = ProductSubcategory::all()
            ->where('slug', '=', request()->query('subcategory'))
            ->first()->id;

        $products = Product::
            where([
                ['product_subcategory_id', '=', $subId],
                ['active', '=', true]
            ])->get();

        return view('shop/products/index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('shop/products/show', ['product' => $product]);
    }
}
