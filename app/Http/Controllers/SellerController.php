<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        // $sellers = Seller::all();
        return Seller::findOrFail(1)->products;
    }
    public function many_sellers()
    {
        return Seller::findOrFail(1)->manyproducts;
    }
    public function manyToOne()
    {
        // return Product::all();
        $data = Product::with('seller')->get();
        return $data;
    }
}
