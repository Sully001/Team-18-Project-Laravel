<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Function to get all products

    public function index() {
        $products = Product::all();
        dd($products);
        return view('index', [
            'products' => $products,
        ]);
    }
}
