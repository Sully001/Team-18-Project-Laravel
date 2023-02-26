<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function checkout() {
        $userid = auth()->user()->id;
        $items = Basket::where('user_id', $userid)->get();

        if ($items->isEmpty()) {
            return redirect()->back()->with('empty', 'Your basket is empty');
        }
        
        
        if (DB::table('orders')->max('order_id') == null) {
            $newestID = 1;
        } else {
            $newestID = DB::table('orders')->max('order_id') + 1;
        }

        foreach($items as $item) {
            $order = new Order();
            $order->order_id = $newestID;
            $order->user_id = $userid;
            $order->product_id = $item->product_id;
            $order->product_size = $item->size;
            $order->quantity = $item->quantity;
            $order->subtotal = $item->price * $item->quantity;

            $order->save();
        }

        Basket::where('user_id', $userid)->delete();
        return view('checkout');
    }
}
