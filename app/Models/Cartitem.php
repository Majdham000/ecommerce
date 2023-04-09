<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    use HasFactory;

    public $timestamps = false ;

    public function promodel()
    {
        return $this -> belongsTo(Promodel::class,'promodel_id');
    }

    public function carts()
    {
        return $this -> hasMany(Cart::class,'cart_item_id');
    }

}
