<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id' => fake()->numberBetween(1,10),
            'type' => fake()->name(),
            'total_cost' => fake()->randomNumber(),
            'date' => fake()->date()
        ];
    }
}
