<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variation>
 */
class VariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory()->create()->id,
            'size' => fake()->randomElement(['s','m','l','xl']),
            'color' => fake()->colorName(),
            'quantity' => fake()->numberBetween(1,3)
        ];
    }
}
