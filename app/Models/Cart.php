<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function customer()
    {
        return $this -> belongsTo(User::class,'user_id');
    }

    public function items()
    {
        return $this -> hasMany(CartItem::class,'cart_id');
    }

    public function payment()
    {
        return $this -> hasOne(Payment::class,'cart_id');
    }

}
