@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/product.css">
@endsection

@section('content')

    @if (session('add'))
        {{ session('add') }}
    @endif

    <h1>Welcome To the Product Page (For a single product)</h1>
    <p>('/product') route</p>    
    <img src="/images/{{ $product->product_image }}" alt="Shoes" height="300px" width="300px">
    <p>Product ID: {{ $product->product_id }}</p>
    <p>Product Brand: {{ $product->product_brand }}</p>
    <p>Product Name: {{ $product->product_name}}</p>
    <p>Product Category: {{ $product->product_category }}</p>
    <p>Product Description: {{ $product->product_description}}</p>


    <h3>Choose a size:</h3>

    <form action="{{ route('basket.store') }}" method="POST">
      @csrf
        <input type="hidden" name="product" id="product" value="{{ $product->product_id }}">

        <input type="radio" id="size-4" name="size" value="4" class="radio">
        <label class="label label-1" for="size-4">4</label>
      
      <input type="radio" id="size-5" name="size" value="5" class="radio">
        <label class="label label-2" for="size-5">5</label>
        
        
        <input type="radio" id="size-6" name="size" value="6" class="radio">
        <label class="label label-3" for="size-6">6</label>
        
        <input type="radio" id="size-7" name="size" value="7" class="radio">
        <label class="label label-4" for="size-7">7</label>
        
        <input type="radio" id="size-8" name="size" value="8" class="radio">
        <label class="label label-5" for="size-8">8</label>
        
        <input type="radio" id="size-9" name="size" value="9" class="radio">
        <label class="label label-6" for="size-9">9</label>
        
        <input type="radio" id="size-10" name="size" value="10" class="radio">
        <label class="label label-7" for="size-10">10</label>
        
        <input type="radio" id="size-11" name="size" value="11" class="radio">
        <label class="label label-8" for="size-11">11</label>
        
        <input type="radio" id="size-12" name="size" value="12" class="radio">
        <label class="label label-9" for="size-12">12</label>
        
        <input type="radio" id="size-13" name="size" value="13" class="radio">
        <label class="label label-10" for="size-13">13</label>

        <select name="quantity" id="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        
        <button type="submit" btn btn-primary>Add to basket</button>
      </form>
@endsection