<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id','published_at'];

    public function category()
    {
        return $this -> belongsTo(Category::class,'category_id');
    }

    public function brand()
    {
        return $this -> belongsTo(brand::class,'brand_id');
    }

    public function reviews()
    {
        return $this -> hasMany(Review::class,'product_id');
    }

}
