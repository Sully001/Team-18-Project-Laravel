<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class PreviousOrderController extends Controller
{
    public function index($id) {
        //Grab all rows part of the same order
        $orderItems = OrderDetail::where('order_id', $id)->get();
        $order = Order::where('order_id', $id)->get();

        
        //Grab total price of the order
        $total = Order::where('order_id', $id)->select('total')->get();
        $orderTotal = $total[0]['total'];

        $items = [];
        foreach($orderItems as $item) {
            //Get corresponding product
            $product = Product::findorFail($item->product_id);
            array_push($items, [
                'name' => $product->product_name,
                'price' => $product->product_price,
                'image' => $product->product_image,
                'size' => $item->product_size,
                'quantity' => $item->quantity,
                'itemTotal' => $item->quantity * $product->product_price,
                'order_completion' => $order[0]['order_completion'],
                'date' => $order[0]['created_at'],
            ]);
        }
        return view('orderdetails', [
            'items' => $items,
            'orderTotal' => $orderTotal, 
        ]);
    }
}
