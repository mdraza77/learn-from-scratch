<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $data = new Student;
        // echo $data->test();
        $students = Student::all();
        return view('students', compact('students'));
    }

    public function list_students()
    {
        $students = Student::all();
        return view('list-student', compact('students'));
    }
    public function add_students()
    {
        return view('add-student');
    }
    public function store_students(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);

        Student::Create($validated);

        return redirect()->route('students.createForm')->with('success', 'Added Successfully');
    }
}
