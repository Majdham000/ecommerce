<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        return Product::filter([$request])->paginate($request->per_page);
    }

    public function show(Product $product)
    {
        return $product;
    }
}
