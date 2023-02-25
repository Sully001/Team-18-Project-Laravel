@extends('layouts.layout')

@section('content')

    <h1>Basket Page</h1>  

    @foreach ($basket as $item)
        <img src="/images/{{ $item->product_image}}" alt="Image" height="140px" width="140px">
        <p>Product ID: {{ $item->product_id }}</p>
        <p>Product Name: {{ $item->product_name }}</p>
        <p>Shoe Size: {{ $item->size }}</p>
        <p>Quantity: {{ $item->quantity }}</p>
        <p>Price: £{{ $item->price }}</p>  
    @endforeach

@endsection