<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Brand;
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
            'category_id' => Category::factory(),
            'brand_id' => fake()->numberBetween(1,3),
            'name' => fake()->name(),
            'price' => fake()->numberBetween(100,200),
            'image_path' => 'default.png',
            'sale' => fake()->numberBetween(0,70),
            'description' => fake()->text(),
            'gender' => fake()->randomElement(['male','female']),
        ];
    }
}
