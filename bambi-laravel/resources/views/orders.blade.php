@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="">
@endsection

@section('content')
  <h1>Your Previous orders</h1> 
  @foreach ($orders as $order)
    <p>Order Number: {{ $loop->index + 1 }}
       | Total: {{ $order->total }} 
       | Order Status: {{ $order->order_completion }} 
       | Order Date & Time: {{ $order->created_at }}
       <a href="{{ route('previous.orders',$order->order_id) }}">View Order</a>
    </p>
  @endforeach

@endsection