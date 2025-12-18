<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();
        $product->name = 'iphone';
        $product->price = '5000';
        if ($product->save()) {
            echo "Product Added Successfully";
        }
    }
}
