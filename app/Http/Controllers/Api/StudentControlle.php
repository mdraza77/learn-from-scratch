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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'batch' => 'nullable',
        ]);

        Student::Create($validated);

        return "Student stored successfully";
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'batch' => 'nullable',
        ]);

        $student->update($validated);

        return "Student updated successfully";
    }
}
