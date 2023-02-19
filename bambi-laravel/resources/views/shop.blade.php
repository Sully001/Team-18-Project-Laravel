@extends('layouts.layout')

@section('content')

<h1>Welcome To the Shop Page</h1>
<p>('/shop') route</p>   






{{-- This section is commented out so as to not affect front end developers --}}
{{-- Don't uncomment. This is data that is retrieved from the database--}}
    {{-- @foreach ($products as $product)
        <div style="border: 1px solid">
            <p>{{ $product->product_brand }}</p>
            <p>{{ $product->product_name }}</p>
            <p>£{{ $product->product_price }}</p>
            <p>{{ $product->product_name }}</p>
            <p>{{ $product->product_gender }}</p>
            <p>{{ $product->product_category }}</p>
        </div>
        
    @endforeach --}}
@endsection