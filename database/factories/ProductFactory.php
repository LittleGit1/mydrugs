<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\ProductCategoryClass;
use App\Models\ProductCategorySubclass;
use App\Models\ProductSubcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => fake()->text(30),
            'description'       => fake()->text(),
            'price'             => fake()->numberBetween(4, 20),
            'active'            => fake()->boolean(),
            'stock_quantity'    => 0,
            'seller_id'         => User::inRandomOrder()->first()->id,
            'product_category_id'  => ProductCategory::inRandomOrder()->first()->id,
            'product_subcategory_id' => ProductSubcategory::inRandomOrder()->first()->id,
        ];
    }
}
