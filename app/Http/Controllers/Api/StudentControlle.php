<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentControlle extends Controller
{
    public function index()
    {
        return Student::all();
    }
}
