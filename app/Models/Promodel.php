<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promodel extends Model
{
    use HasFactory;

    public $timestamps = false;

<<<<<<< HEAD
=======
    protected $guarded = ['id'];

>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f
    public function product()
    {
        return $this -> belongsTo(Product::class,'product_id');
    }

    public function cartitem()
    {
        return $this -> hasOne(Cartitem::class,'model_id');
    }
}
