<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index($id) {
        $basket = Basket::where('user_id', '=', $id)->get();
        return view('basket', [
            'basket' => $basket,
        ]);
    }

    public function store($id, Request $request) {
        //Get the actual item
        $product = Product::findorFail($request->product);


        $basket = new Basket();
        $basket->user_id = $id;
        $basket->product_id = $request->product;
        $basket->product_name = $product->product_name;
        $basket->size = $request->size;
        $basket->quantity = $request->quantity;
        $basket->price = $product->product_price;
        $basket->product_image = $product->product_image;

        $basket->save();

        return redirect()->back()->with('add', 'Successfuly Added To Basket');
    }
}
