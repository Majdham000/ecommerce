<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;

<<<<<<< HEAD
=======
    protected $guarded = ['id'];

>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f
    public function user()
    {
        return $this -> belongsTo(User::class,'user_id');
    }

    public function product()
    {
        return $this -> belongsTo(Product::class,'product_id');
    }

}
