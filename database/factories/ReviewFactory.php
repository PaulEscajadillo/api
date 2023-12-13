<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function() {
                return Product::all()->random();
            },
            'customer' => fake()->name,
            'review' => fake()->paragraph,
            'star' => fake()->numberBetween(0, 5)
        ];
    }
}
