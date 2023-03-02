@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')

<!-- <div class="homepage-gif">
    <h2>Welcome to Bambi!</h2>
    <button type="button" onclick=window.location.href="{{ route('products.index') }}" class="login-btn">SHOP NOW</button>
</div>  -->

<div class="homepage">
    <!-- <img src="/Website-Images/hp-background.png" style="width: 100%;
    "alt="gif"> -->
    <button type="button" onclick=window.location.href="{{ route('products.index') }}" class="login-btn">SHOP NOW</button>
</div>

<div class="new">
    <h2>New In</h2>
</div>

<div class="new-in-contain">
    
    <!-- $products is the value passed in from the HomeController.php. This is currently a list of all products from the products table-->
    @foreach ($products as $product)
        <!-- Only loop 4 times as we only want to show the first 4 items -->
        @if ($loop->index < 4)
        <div class="card" style="background-color: #FFF6D3;">
            <!-- <div class="image"><span class="text">This is a chair.</span></div> -->
            <img src="/images/{{ $product->product_image}}" alt="Shoes" width="140px" height="140px">
            <h2 class="title">{{ $product->product_name }}</h2>
            <span class="price">£{{ $product->product_price }}</span>
        </div>
        @endif
    @endforeach

    <!-- <div class="card">
        <div class="image"><span class="text">This is a chair.</span></div>
        <h2 class="title">Cool Chair</h2>
        <span class="price">$100</span>
    </div>

    <div class="card">
        <div class="image"><span class="text">This is a chair.</span></div>
        <h2 class="title">Cool Chair</h2>
        <span class="price">$100</span>
    </div>

    <div class="card">
        <div class="image"><span class="text">This is a chair.</span></div>
        <h2 class="title">Cool Chair</h2>
        <span class="price">$100</span>
    </div> -->
</div>



@endsection
