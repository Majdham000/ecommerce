<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

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
