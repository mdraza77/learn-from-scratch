<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobiles = Mobile::withTrashed()->latest()->get();
        return view('mobile.index', compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'operating_system' => 'required|string|max:255',
            'storage_capacity' => 'required|integer|min:0',
            'ram' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ]);

        Mobile::create($validated);

        return redirect()->route('mobiles.index')->with('success', 'Mobile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobile $mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobile $mobile, $id)
    {
        $mobile = Mobile::findOrFail($id);
        return view('mobile.edit', compact('mobile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobile $mobile, $id)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'operating_system' => 'required|string|max:255',
            'storage_capacity' => 'required|integer|min:0',
            'ram' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ]);

        $mobile = Mobile::findOrFail($request->id);
        $mobile->update($validated);

        return redirect()->route('mobiles.index')->with('success', 'Mobile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobile $mobile)
    {
        //
    }
}
