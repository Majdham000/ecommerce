<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $timestamps = false;

<<<<<<< HEAD
=======
    protected $guarded = ['id','date'];

>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f
    public function cart()
    {
        return $this -> belongsTo(Cart::class,'cart_id');
    }
}
