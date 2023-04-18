<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Cart;
use App\Models\CartItem;

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

        Cart::factory(10)->create();

        CartItem::factory(10)->create();

        Review::factory(5)->create();

        Payment::factory(5)->create();


    }
}
