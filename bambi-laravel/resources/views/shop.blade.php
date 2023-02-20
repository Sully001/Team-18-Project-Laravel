@extends('layouts.layout')

@section('content')

<h1>Welcome To the Shop Page</h1>
<p>('/shop') route</p>   


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