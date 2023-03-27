<?php

namespace Database\Factories;

use App\Models\Promodel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cartitem>
 */
class CartitemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promodel_id' => Promodel::factory()->create()->id,
            'quantity' => fake()->numberBetween(1,3),
            'status' => fake()->boolean(),
            'total_price' => fake()->randomNumber()
        ];
    }
}
