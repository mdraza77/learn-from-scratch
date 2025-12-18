<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function setNameAttribute($val)
    {
        $this->attributes['name'] = ucfirst($val);
    }
}
