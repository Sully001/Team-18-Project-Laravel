@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/shop.css">
@endsection

@section('content')

<h1>Welcome To the Shop Page</h1>
<p>('/shop') route</p>   

<a href="{{ route('products.index')}}">All Products</a>
<a href="{{ route('products.men')}}">Men</a>
<a href="{{ route('products.women')}}">Women</a>

<br><br>

<a href="{{ URL::current()."?sort=desc" }}">Price - High To Low</a>
<a href="{{ URL::current()."?sort=asc" }}">Price - Low To High</a>

<br><br>

<div class="flex-container">
    @foreach ($products as $product)
        <a href="{{ route('products.show', $product->product_id) }}">
            <div class="product">
                <img src="/images/{{ $product->product_image}}" alt="Shoes" width="140px" height="140px">
                <p>{{ $product->product_brand }}</p>
                <p>{{ $product->product_name }}</p>
                <p>£{{ $product->product_price }}</p>
            </div>
        </a>
    @endforeach
</div>
    
@endsection