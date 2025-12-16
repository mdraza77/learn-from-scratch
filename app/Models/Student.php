<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    protected $guarded = [];
    function test() {
        return "Test function from Student Model";
    }
}
