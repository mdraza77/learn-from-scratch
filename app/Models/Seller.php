<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Seller extends Model
{
    function products()
    {
        return $this->hasOne(Product::class, 'seller_id');
    }
    function manyproducts()
    {
        return $this->hasMany(Product::class, 'seller_id');
    }
    function many_to_one()
    {
        // return Product::all();
    }
}
