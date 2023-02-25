<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index($id) {
        $basket = Basket::where('user_id', '=', $id)->get();
        return view('basket', [
            'basket' => $basket,
        ]);
    }

    public function store(Request $request) {
        //Get the actual item from the database
        $product = Product::findorFail($request->product);
        $user_id = auth()->user()->id;

        if (DB::table('baskets')->where('user_id', '=', $user_id)
        ->where('product_id', '=', $request->product)
        ->where('size', '=', $request->size)->exists()) {
           
            $item = Basket::where('user_id', '=', $user_id)
            ->where('product_id', '=', $request->product)
            ->where('size', '=', $request->size)->get();

            $newQuantity = $item[0]['quantity'] + $request->quantity;

            DB::table('baskets')->updateOrInsert(
                ['user_id' => $user_id, 'product_id' => $request->product, 
                'size' => $request->size],
                ['quantity' => $newQuantity]);
        } else {
            $basket = new Basket();
            $basket->user_id = $user_id;
            $basket->product_id = $request->product;
            $basket->product_name = $product->product_name;
            $basket->size = $request->size;
            $basket->quantity = $request->quantity;
            $basket->price = $product->product_price;
            $basket->product_image = $product->product_image;

            $basket->save();
        }

        return redirect()->back()->with('add', 'Successfuly Added To Basket');
    }
}
