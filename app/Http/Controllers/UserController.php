<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function addUser()
    {
        return view('user-form');
    }

    // public function storeUser(Request $request)
    // {
    //     // dd($request->all());
    //     Log::info($request->all());
    //     $validated = $request->validate(
    //         [
    //             'firstName' => 'required|string',
    //             'lastName' => 'required|string',
    //             'userName' => 'required|string',
    //             'state' => 'required|string|uppercase',
    //             'zip' => 'required|numeric',
    //             'email' => 'required|string|unique:users',
    //             'password' => 'required|string',
    //             'gender' => 'required|in:male,female',
    //             'skills' => 'required',
    //             'skillsRange' => 'required|numeric',
    //         ],
    //         [
    //             'state.uppercase' => 'City should be in UPPERCASE.'
    //         ]
    //     );
    //     Log::info('Data Validation passed');
    //     // $validated['password'] = 123123123;
    //     User::Create($validated);

    //     Log::info('Data Inserted');

    //     return redirect()->route('user.form')->with('success', 'Inserted Successfully');
    // }
    function index()
    {
        // return DB::select('select * from users');
        // $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $users = User::all();
        return view('users', compact('users'));
        // return $response;
    }
}
