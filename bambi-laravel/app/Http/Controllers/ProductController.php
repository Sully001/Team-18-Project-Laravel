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
            $products = Product::paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    //Retrieves a single product
    public function show($id) {
        $product = Product::findorFail($id);
        $sizes = Size::where('product_id', $id)->get();
        //Grabs all sizes and their stock levels for each size
        //$sizes = Size::where('product_id', '=', $id)->get();
        return view('product', [
            'product' => $product,
            'sizes' => $sizes,
            //'sizes' => $sizes,
        ]);
    }

    public function search(Request $request) {
        $search = $request->search;
        $products = Product::where(function($query) use($search) {
            $query->where('product_brand', 'like', '%'.$search.'%')
                  ->orWhere('product_name', 'like', '%'.$search.'%');
            // Add more orWhere clauses for additional columns if needed
        })->paginate();
        return view('shop', [
            'products' => $products,
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

    public function shopWomenTrainers(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Trainers')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Trainers')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopWomenBoots(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Boots')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
        $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Boots')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopWomenHeels(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Heels')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Heels')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopWomenFlats(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Flats')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Flats')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopWomenSandals(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Sandals')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Women')->where('product_category', 'Sandals')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }


    //Mens Products
    public function shopMenTrainers(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Trainers')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Trainers')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }
    public function shopMenLoafers(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Loafers')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Loafers')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopMenBoots(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Boots')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Boots')->paginate(16);
       }
        
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopMenDressShoes(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Dress Shoes')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
        $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Dress Shoes')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }

    public function shopMenSliders(Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Sliders')->orderBy('product_price', $request->query('sort'))->paginate(16);
       } else{
        $products = Product::where('product_gender', '=', 'Men')->where('product_category', 'Sliders')->paginate(16);
       }
        return view('shop', [
            'products' => $products,
        ]);
    }
}