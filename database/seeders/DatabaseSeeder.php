<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Brand::factory()->create(['name'=>'adidas']);
        \App\Models\Brand::factory()->create(['name'=>'puma']);
        \App\Models\Brand::factory()->create(['name'=>'nike']);

        \App\Models\Category::factory()->create(['name'=>'shirt']);
        \App\Models\Category::factory()->create(['name'=>'jacket']);
        \App\Models\Category::factory()->create(['name'=>'shoes']);

        \App\Models\Review::factory(5)->create();

        \App\Models\Payment::factory(5)->create();

        \App\Models\Cart::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
