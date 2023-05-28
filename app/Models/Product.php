<?php

namespace App\Models;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $with = ['variations'];

    public $timestamps = false ;

    public function scopeFilter($query, array $filters) : void
    {
        $query->when($filters['gender'] ?? false, fn($query, $gender)=>
            $query->where('gender', $gender)
        );

        $query->when($filters['category'] ?? false, fn($query, $category)=>
            $query->where('category_id', $category)
        );

        $query->when($filters['size'] ?? false, fn($query, $size)=>
            $query->whereHas('variations', fn($query)=>
                $query->where('size',$size)
            )
        );

        $query->when($filters['color'] ?? false, fn($query, $color)=>
            $query->whereHas('variations', fn($query)=>
                $query->where('color',$color))
        );

    }


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

    public function variations(){
        return $this -> hasMany(Variation::class, 'product_id');
    }

}
