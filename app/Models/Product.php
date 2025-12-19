<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Product extends Model
{
    function setNameAttribute($val)
    {
        $this->attributes['name'] = ucfirst($val);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
