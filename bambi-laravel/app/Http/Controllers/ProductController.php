<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Data retrieval has been commented out to not affect front end development
    public function index() {
       //$products = Product::all();
        return view('shop', [
            //'products' => $products,
        ]);
    }
}
