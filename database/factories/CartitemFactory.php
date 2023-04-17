<?php

namespace Database\Factories;

use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'variation_id' => Variation::factory()->create()->id,
            'cart_id' => fake()->numberBetween(1, 10),
            'quantity' => fake()->numberBetween(1,3),
            'total_price' => fake()->randomNumber()
        ];
    }
}
