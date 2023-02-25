<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index($id) {
        return view('basket');
    }

    public function store($id, Request $request) {
        $basket = new Basket();
        $basket->user_id = $id;
        $basket->product_id = $request->product;
        $basket->size = $request->size;
        $basket->quantity = $request->quantity;

        $basket->save();

        return redirect()->back()->with('add', 'Successfuly Added To Basket');
    }
}
