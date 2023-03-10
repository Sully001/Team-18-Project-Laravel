<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;

class ProductController extends Controller
{
    //Method to get all products. Checks if sort has been requested
    public function index(Request $request) {
       if ($request->exists('sort')) {
            $products = Product::orderBy('product_price', $request->query('sort'))->paginate(16);
       } else {
            $products = Product::paginate(16);;
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    //Retrieves a single product
    public function show($id) {
        $product = Product::findorFail($id);
        //Grabs all sizes and their stock levels for each size
        //$sizes = Size::where('product_id', '=', $id)->get();
        return view('product', [
            'product' => $product,
            //'sizes' => $sizes,
        ]);
    }

    public function listCarouselProducts()
    {
        //Method created to get data from the 'product' table and to show them on the products view in carousel.
        $products = Product::skip(0)->take(12)->get();
        return $products;
    }

    //Gets all mens products and checks if sorting has been requested
    public function shopMen(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else {
            $products = Product::where('product_gender', '=', 'Men')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    //Gets all womens products and checks if sorting has been requested
    public function shopWomen(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else {
            $products = Product::where('product_gender', '=', 'Women')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }
}
