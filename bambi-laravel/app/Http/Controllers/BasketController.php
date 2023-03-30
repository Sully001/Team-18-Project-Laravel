<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index($id) {
        $basket = Basket::where('user_id', '=', $id)->get();
        if (count($basket) == 0) {
            return view('emptybasket');
        }

        $products = [];
        $total = 0;
        foreach ($basket as $item) {
            //Get the corresponding product info
            $product = Product::findorFail($item->product_id);
            array_push($products, [
                'id'=> $product->product_id,
                'brand' => $product->product_brand,
                'name' => $product->product_name,
                'price' => $product->product_price,
                'size' => $item->size,
                'image' => $product->product_image, 
                'quantity' => $item->quantity
            ]);
            $total += $item->quantity * $product->product_price;
        }
        return view('basket', [
            'products' => $products,
            'total' => $total,
        ]);
    }

    public function store(Request $request) {
        //Check if a size has been added/chosen
        $request->validate([
            'size' => 'required|string'
        ], [
            'size.required' => 'Please choose a size.'
        ]);
        //Get the actual item from the database
        $user_id = auth()->user()->id;

        $stock = Size::where('product_size',$request->size)
        ->where('product_id', $request->product)->get();

        if($request->quantity > $stock[0]['product_stock']) {
            return redirect()->back()->with('stock', "There's only ".$stock[0]['product_stock']." of this item left");
        }

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
            $basket->size = $request->size;
            $basket->quantity = $request->quantity;
            $basket->save();
        }

        return redirect()->back()->with('add', 'Successfuly Added To Basket');
    }

    public function destroy(Request $request) {
        Basket::where('user_id', auth()->user()->id)
        ->where('product_id', $request->id)
        ->where('size', $request->size)
        ->delete();

        return redirect()->back()->with('delete', 'Successfully Deleted');
    }

    public function getBasketCount() {
        $basketCount = Basket::where('user_id', auth()->user()->id)->sum('quantity');
        return $basketCount;
    }
}

