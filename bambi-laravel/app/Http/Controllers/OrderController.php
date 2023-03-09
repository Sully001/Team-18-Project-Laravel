<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Size;
use App\Mail\Ordered;
use App\Models\Order;
use App\Models\Basket;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function checkout(Request $request) {
        $orderEmail = [];
        $userid = auth()->user()->id;
        $items = Basket::where('user_id', $userid)->get();

        //If the basket is empty return "empty"
        if ($items->isEmpty()) {
            return redirect()->back()->with('empty', 'Your basket is empty');
        }

        //Otherwise create a new order
        $order = new Order();
        $order->user_id = $userid;
        $order->first_name = auth()->user()->first_name;
        $order->last_name = auth()->user()->last_name;
        $order->total = $request->total;

        $order->save();
        //Grab the id of the newly order 
        $id = $order->id;

        foreach ($items as $item) {
            $detail = new OrderDetail();
            $detail->order_id = $id;
            $detail->product_id = $item->product_id;
            $detail->product_size = $item->size;
            $detail->quantity = $item->quantity;
            $detail->save();

            //Then grab each items stock by (size and product_id) and update it
            $size = Size::where('product_id', $item->product_id)
            ->where('product_size', $item->size)->get();

            $stock = $size[0]['product_stock'] - $item->quantity;
            
            Size::where('product_id', $item->product_id)
            ->where('product_size', $item->size)
            ->update(['product_stock' => $stock ]);

            //Gather data to be sent via the users email
            $product = Product::findorFail($item->product_id);
            $name = $product->product_name;
            array_push($orderEmail, [
                'name' => $name,
                'size' => $item->size,
                'quantity' => $item->quantity 
            ]);
        }

        //Delete all users items from basket
        Basket::where('user_id', $userid)->delete();
        try {
            Mail::to(auth()->user()->email)->queue(new Ordered($orderEmail, $request->total));
        } catch (Exception $exception) {
            error_log("Couldn't send register email");
        }
        
        return view('checkout');
    }

    public function index() {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('orders', [
            'orders' => $orders
        ]);
    }
}
