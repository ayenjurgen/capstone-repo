<?php

namespace Database\Factories;

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
            'product_name' => fake()->name(),
            'quantity' => fake()->randomFloat(2, 10, 100),
            'price' => fake()->randomFloat(2, 10, 100),
            'status' => fake()->numberBetween('1', '2'),
        ];
    }
}
