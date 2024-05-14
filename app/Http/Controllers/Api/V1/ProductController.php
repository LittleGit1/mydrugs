<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\StoreProductRequest;
use App\Http\Requests\Api\V1\UpdateProductRequest;
use App\Http\Resources\V1\ProductResource;
use App\Models\Product;
use Illuminate\Support\Collection;

class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!empty(request()->query())) {
            $categoriesToArray = null;
            $subcategoryToArray = null;

            if (request()->has('category'))
                $categoriesToArray = explode(",", request()->query('category'));

            if (request()->has('subcategory'))
                $subcategoryToArray = explode(",", request()->query('subcategory'));

            $products = Product::with(['category', 'subcategory'])
                ->whereHas(
                    'category',
                    fn ($query) => $query->whereIn('slug', $categoriesToArray),
                    '='
                )
                ->whereHas(
                    'subcategory',
                    fn ($query) => $query->whereIn('slug', $subcategoryToArray),
                    '='
                )->paginate();

            return ProductResource::collection($products);
        }

        return ProductResource::collection(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
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
