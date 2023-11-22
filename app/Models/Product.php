<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'weight', 'type', 'image'];

    public function wishlist()
     {
         return $this->hasMany(Wishlist::class, 'product_id', 'id');
     }

}

