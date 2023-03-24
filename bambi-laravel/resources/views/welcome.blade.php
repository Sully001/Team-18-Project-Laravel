@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('content')

<div class="homepage">
    <img src="/Website-Images/hp-background.png" alt="">
    <button type="button" onclick=window.location.href="{{ route('products.index') }}" class="login-btn">SHOP NOW</button>
</div>


<div class="new-in-contain">

    <div class="new-in">
        <h2>New In</h2>
    </div>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Looping through list of products provided from web.php -->
                        @foreach($products as $product)
                        @php
                        $i = $loop->iteration%4;
                        @endphp
                        <!-- This line unconditionally adds an image with appropriate text -->
                        <div class="col text-center card" style="background-color: #FFF6D3; border-radius: 40px; height: 300px;">
                            <!-- Fetches images from shop.blade and formats them into carousel  -->
                                <img src="/images/{{ $product->product_image}}" alt="Shoes" >
                                <h2 class="title">{{ $product->product_name }}</h2>
                                <span class="price">£{{ $product->product_price }}</span>
                                <button class="review-button" onclick=window.location.href="{{ route('products.show', $product->product_id) }}">Quick View</button>
                        </div>
                        <!-- If index i is a multiple of 4, close the slide! -->
                        @if($i==0)
                    </div>
                </div>

                @endif
                <!-- If index i is a multiple of 4 & we are not at the 12th image, create a new slide (loops back to top) -->
                @if($i==0 AND !$loop->last)
                <div class="carousel-item">
                    <div class="row">
                        @endif


                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>

</div>

<div class="reviews">
    <h2>See What Our Customers Have To Say</h2>
</div>

<div class="reviews-contain">

    <div class="review-1">
    <div class="review-details">
        <p class="review-title">Mary P, Manchester</p>
        <p class="review-body">"Amazing shoes, at an outstanding quality. Would definitely shop here again!"</p>
    </div>
    </div>

    <div class="review-2">
    <div class="review-details">
        <p class="review-title">John Doe, London</p>
        <p class="review-body">"Love them! Shoes are true to size and super comfortable!"</p>
    </div>
    </div>

    <div class="review-3">
    <div class="review-details">
        <p class="review-title">Susan Hoffman, Isle of Wight</p>
        <p class="review-body">"Long-lasting wear, easy to maintain and quick to break in!"</p>
    </div>
    </div>

    <div class="review-4">
    <div class="review-details">
        <p class="review-title">Samantha Wilson, Bath</p>
        <p class="review-body">"I love how soft the material on the shoes are, they are the perfect fit!"</p>
    </div>
    </div>
    

</div>


@endsection
