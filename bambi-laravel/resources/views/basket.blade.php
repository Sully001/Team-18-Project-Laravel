@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/basket.css">
@endsection

@section('content')

  <h1>Basket Page</h1>  

  @if (session('empty'))
      <p>{{ session('empty') }}</p>  
  @endif

  <form action="{{ route('checkout')}}" method="POST">
    @csrf
    <button type="submit">Checkout</button>
  </form>
   

  <p>Subtotal: 
    @php
      $subtotal = 0;
      foreach ($basket as $item) {
      $sum = $item->price * $item->quantity;
      $subtotal += $sum;
      }
      echo '£'.$subtotal;
    @endphp
  </p>
  <p>Total: @php echo '£'.$subtotal @endphp</p>


  @foreach ($basket as $item)
      <img src="/images/{{ $item->product_image}}" alt="Image" height="140px" width="140px">
      <p>Product ID: {{ $item->product_id }}</p>
      <p>Product Name: {{ $item->product_name }}</p>
      <p>Shoe Size: {{ $item->size }}</p>
      <p>Quantity: {{ $item->quantity }}</p>
      <p>Price: £{{ $item->price }}</p>  
  @endforeach

@endsection