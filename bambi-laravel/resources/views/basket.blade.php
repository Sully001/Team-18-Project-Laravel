@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/basket.css">
@endsection

@section('content')

  <h1>Basket Page</h1>  
  @if (session('delete'))
      <div class="alert alert-warning" role="alert">
          <p>{{ session('delete') }}</p>
      </div>
  @endif

  <p>Subtotal: £{{ $total }}</p>
    
  <p>Total: £{{ $total }}</p>

  <form action="{{route('checkout')}}" method="POST"> 
    @csrf    
    <input type="hidden" name="total" value="{{ $total }}">
    <button type="submit">Checkout</button>
  </form>
  <br>

  @foreach ($products as $product)
    <img src="/images/{{ $product['image'] }}" alt="Shoes" height="140px" width="140px">
      <p>Product ID: {{ $product['id'] }}</p>
      <p>Product ID: {{ $product['brand'] }}</p>
      <p>Product Name: {{ $product['name'] }}</p>
      <p>Price: £{{ $product['price'] }}</p>  
      <p>Shoe Size: {{ $product['size'] }}</p>
      <p>Quantity: {{ $product['quantity'] }}</p>

    <form action="{{ route('basket.remove') }}" method="POST">
      @csrf
      @method('DELETE')
      <input type="hidden" name="id" value="{{ $product['id'] }}">
      <input type="hidden" name="size" value="{{ $product['size'] }}">
      <button class="btn btn-danger">Remove</button>
    </form>
    <br>
  @endforeach

@endsection