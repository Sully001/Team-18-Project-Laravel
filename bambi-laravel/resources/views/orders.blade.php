@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/orders.css">
@endsection

@section('content')

  @foreach ($orders as $order)
    <!-- <p>Order Number: {{ $loop->index + 1 }}
       | Total: {{ $order->total }} 
       | Order Status: {{ $order->order_completion }} 
       | Order Date & Time: {{ $order->created_at }}
       <a href="{{ route('previous.orders',$order->order_id) }}">View Order</a>
    </p> -->

<div class="orders-contain">

  <div class="orders-card">
    <div class="order-no"> 
      <p>Order No: {{ $loop->index + 1 }}</p>
    </div>
    <div class="order-status"> 
      <p>Status: {{ $order->order_completion }}</p> 
    </div>
    <div class="order-dt"> 
      <p>{{ $order->created_at }}</p>
    </div>
    <div class="order-total"> 
      <p>£{{ $order->total }}</p> 
    </div>
    <div class="view-order"> 
      <p><a href="{{ route('previous.orders',$order->order_id) }}">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a></p>
    </div>
  </div>

</div>

@endforeach

@endsection