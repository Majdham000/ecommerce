<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
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

    public function cartitem()
    {
        return $this -> belongsTo(Cartitem::class,'cart_item_id');
    }

    public function payment()
    {
        return $this -> hasOne(Payment::class,'cart_id');
    }

}
