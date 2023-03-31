@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/orders.css">
@endsection

@section('content')
  <h3>Here are you orders: Latest Orders Appear First</h3>
  @for ($i = count($orders) - 1; $i >= 0; $i--)
 
  <div class="orders-contain">

    <div class="orders-card">
      <div class="order-no"> 
        <p>Order No: {{$i + 1}}</p>
      </div>
      <div class="order-status"> 
        <p>Status: {{ $orders[$i]->order_completion }}</p> 
      </div>
      <div class="order-dt"> 
        <p>{{ $orders[$i]->created_at }}</p>
      </div>
      <div class="order-total"> 
        <p>£{{ $orders[$i]->total }}</p> 
      </div>
      <div class="view-order"> 
        <p><a href="/order/{{$orders[$i]->order_id}}">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a></p>
      </div>
    </div>
  </div>
@endfor

@endsection