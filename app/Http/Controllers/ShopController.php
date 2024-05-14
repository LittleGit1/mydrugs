<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Inertia\Inertia;

class ShopController extends Controller
{
    public function index()
    {
        return Inertia::render('Shop/Index');
    }

    public function products()
    {
        $categories = ProductCategory::with('subcategories')->get();
        $subcategories = ProductSubcategory::all();

        if (!empty(request()->query())) {
            return Inertia::render('Shop/Products/Index', [
                'products'              => $this->queryProducts(),
                'product_categories'    => $categories,
                'product_subcategories' => $subcategories
            ]);
        }

        return Inertia::render('Shop/Products/Index', [
            'product_categories'    => $categories,
            'product_subcategories' => $subcategories
        ]);
    }

    public function show(Product $product)
    {
        $product->load(['category', 'subcategory', 'seller', 'reviews']);

        return Inertia::render('Shop/Products/Show', ['product' => $product ]);
    }

    private function queryProducts(): Collection
    {

        if (request()->query('subcategory')) {

            return Product::with('subcategory')
                ->whereHas(
                    'subcategory',
                    fn ($query) => $query->where('slug', request()->query('subcategory')),
                    '='
                )
                ->get();
        }

        return Product::with('category')
            ->whereHas(
                'category',
                fn ($query) => $query->where('slug', request()->query('category')),
                '='
            )
            ->get();
    }
}
