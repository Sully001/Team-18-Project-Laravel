@extends('layouts.layout')

@section('content')

<h1>Welcome To the Product Page (For a single product)</h1>
<p>('/product') route</p>    
<img src="/images/{{ $product->product_image }}" alt="Shoes" height="300px" width="300px">
<p>Product ID: {{ $product->product_id }}</p>
<p>Product Brand: {{ $product->product_brand }}</p>
<p>Product Name: {{ $product->product_name}}</p>
<p>Product Category: {{ $product->product_category }}</p>
<p>Product Description: {{ $product->product_description}}</p>

@endsection