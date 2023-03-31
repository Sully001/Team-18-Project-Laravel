@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/basket.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

@endsection

@section('content')

@if (session('empty'))
        <p>{{ session('empty') }}</p>  
    @endif
    @if (session('delete'))
      <div class="alert alert-warning" role="alert">
            <p>{{ session('delete') }}</p>
        </div>
    @endif

<div class = "all">
  <div class = "first_section">
    <h1 id = "basket_title">Your Basket</h1>  
    <p id = "basket_caption">Continue shopping or head to checkout.</p>  

      <div class = "checkout_box">
        <h4 id = "order_summary">Order Summary</h4>
        <div class = "total_info">
          <p id = "subtotal">Subtotal - £{{ $total }}</p>
          <hr id = "line_style">
          <p id = "total">Order Total - £{{ $total }}</p>
          <form action="{{route('checkout')}}" method="POST"> 
            @csrf    
            <input type="hidden" name="total" value="{{ $total }}">
            <button type="submit" id = "checkout_button">Checkout</button>
          </form>
          <br>
        </div>
      </div>

      <div class = "item_sect">
        @foreach ($products as $product)
        <div class = "item_box">
          <img id = "product_image" src="https://bambiadmin.azurewebsites.net/images/{{ $product['image'] }}" alt="Shoes" height="160px" width="160px">
          <div class = "product_info">
              <h5 id = "product_title">{{ $product['brand'] }} {{ $product['name'] }}</h5> 
              <form action="{{ route('basket.remove') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" id = "remove_button">✕</button>
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <input type="hidden" name="size" value="{{ $product['size'] }}">
              </form>
              <hr id = "line_style_item">
              <div class = "size_quantity">
                <p id = "size">Size: {{ $product['size'] }}</p>
                <p id = "quantity">Quantity: {{ $product['quantity'] }}</p>
              </div>
              <p id = "product_tag">£{{ $product['price'] }}</p>  
          </div>
            
        </div>
          <br>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection