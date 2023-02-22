<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //Data retrieval has been commented out to not affect front end development
    public function index() {
       $products = Product::all();
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function show($id) {
        $product = Product::findorFail($id);
        return view('product', [
            'product' => $product,
        ]);
    }

    public function shopMen() {
        $products = Product::where('product_gender', '=', 'Men')->get();
        return view('shopmen', [
            'products' => $products,
        ]);
    }

    public function shopWomen() {
        $products = Product::where('product_gender', '=', 'Women')->get();
        return view('shopwomen', [
            'products' => $products,
        ]);
    }
}
