<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Cart;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Brand::factory()->create(['name'=>'adidas']);
        Brand::factory()->create(['name'=>'puma']);
        Brand::factory()->create(['name'=>'nike']);

<<<<<<< HEAD
        Category::factory()->create(['name'=>'shirt']);
        Category::factory()->create(['name'=>'jacket']);
        Category::factory()->create(['name'=>'shoes']);
=======
        \App\Models\Cart::factory(10)->create();

        \App\Models\Review::factory(5)->create();
>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f

        Cart::factory(10)->create();

<<<<<<< HEAD
        Review::factory(5)->create();

        Payment::factory(5)->create();
=======

>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f


    }
}
