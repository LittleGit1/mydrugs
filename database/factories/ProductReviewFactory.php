<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductComment>
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'body'          => fake()->text(300),
            'likes'       => fake()->numberBetween(0, 200),
            'rating'        => fake()->randomFloat(1, 0, 5),
            'product_id'    => Product::inRandomOrder()->first()->id,
            'user_id'       => User::inRandomOrder()->first()->id
        ];
    }
}
