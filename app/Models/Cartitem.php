<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public $timestamps = false ;

    public function variation()
    {
        return $this -> belongsTo(Variation::class,'variation_id');
    }

    public function cart()
    {
        return $this -> belongsTo(Cart::class, 'cart_id');
    }

}
