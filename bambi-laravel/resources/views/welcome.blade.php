@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')

<div class="homepage">
    <img src="/Website-Images/hp-background.png" alt="">
    <button type="button" onclick=window.location.href="{{ route('products.index') }}" class="login-btn">SHOP NOW</button>
</div>

<div class="new-in" style="padding-top:15px;">
    <h2>New In</h2>
</div>

<div class="new-in-contain">
    
    <!-- $products is the value passed in from the HomeController.php. This is currently a list of all products from the products table-->
    @foreach ($products as $product)
        <!-- Only loop 4 times as we only want to show the first 4 items -->
        @if ($loop->index < 4)
        <div class="card" style="background-color: #FFF6D3; border-radius: 40px; height: 300px;">
            <img src="/images/{{ $product->product_image}}" alt="Shoes" >
            <h2 class="title" style="padding: 2px;">{{ $product->product_name }}</h2>
            <span class="price">£{{ $product->product_price }}</span>
            <button class="review-button" onclick=window.location.href="{{ route('products.index') }}">Quick View</button>
        </div>
        @endif
    @endforeach

</div>

<div class="reviews">
    <h2>See What Our Customers Have To Say</h2>
</div>

<div class="reviews-contain">

    <div class="review-card">
    <div class="review-details">
        <p class="review-title">Mary P, Manchester</p>
        <p class="review-body">"Amazing shoes, at an outstanding quality. Would definitely shop here again!"</p>
    </div>
    </div>

    <div class="review-card">
    <div class="review-details">
        <p class="review-title">John Doe, London</p>
        <p class="review-body">"Love them! Shoes are true to size and super comfortable!"</p>
    </div>
    </div>

    <div class="review-card">
    <div class="review-details">
        <p class="review-title">Susan Hoffman, Isle of Wight</p>
        <p class="review-body">"Long-lasting wear, easy to maintain and quick to break in!"</p>
    </div>
    </div>

    <div class="review-card">
    <div class="review-details">
        <p class="review-title">Samantha Wilson, Bath</p>
        <p class="review-body">"I love how soft the material on the shoes are, they are the perfect fit!"</p>
    </div>
    </div>
    

</div>


@endsection
