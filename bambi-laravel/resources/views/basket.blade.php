@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/basket.css">
@endsection

@section('content')

  <h1>Basket Page</h1>  

  @if (session('empty'))
      <p>{{ session('empty') }}</p>  
  @endif
  @if (session('delete'))
      <p>{{ session('delete') }}</p>  
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

      <form action="{{ route('basket.remove') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{ $item->product_id }}">
        <input type="hidden" name="size" value="{{ $item->size }}">
        <button class="btn btn-danger">Remove</button>
    </form>
  @endforeach

@endsection