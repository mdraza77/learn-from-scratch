<?php

namespace App\Http\Controllers;

use App\Models\Seller;
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
}
