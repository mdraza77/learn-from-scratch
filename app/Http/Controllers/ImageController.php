<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function add_image()
    {
        return view('upload_image');
    }
    public function store_image(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);
        $path = $request->file('file')->store('uploads', 'public');
        $pathArray = explode('/', $path);
        $imagePath = $pathArray[1];
        $image = new Image();
        $image->path = $imagePath;
        $image->save();
        return redirect()->route('image.list')->with('success', 'Image Uploaded Successfully');
    }
    public function show_image_list()
    {
        $images = Image::all();
        // dd($images);
        return view('display_image', compact('images'));
    }
}
