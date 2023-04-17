<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        auth()->user()->cart->cartItems;
    }

    public function store()
    {
        auth()->user()->cart;
    }
}
