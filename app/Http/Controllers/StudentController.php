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
        $students = Student::paginate(10);
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

        return redirect()->route('students.list')->with('success', 'Added Successfully');
    }
    public function delete_students(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()->route('students.list')->with('success', 'Deleted Successfully');
    }
    public function edit_students(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        return view('edit-student', compact('student'));
    }
    public function update_students(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
        ]);

        $student->update($validated);

        return redirect()->route('students.list')->with('success', 'Updated Successfully');
    }

    public function search(Request $request)
    {
        $students = Student::where('name', 'like', "%$request->search%")->get();
        $searchValue = $request->search;
        return view('list-student', compact('students', 'searchValue'));
    }

    public function deleteMultiple(Request $request)
    {
        $result = Student::destroy($request->ids);
        if ($result) {
            return redirect()->route('students.list')->with('success', 'Multiple Deleted Successfully');
        } else {
            return "No Students Selected";
        }
    }
}
