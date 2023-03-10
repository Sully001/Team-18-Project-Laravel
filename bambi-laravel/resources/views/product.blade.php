@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/product.css">
@endsection

@section('content')

    @if (session('add'))
      <div class="alert alert-warning" role="alert">
        <p>{{ session('add') }}: <a href="{{ route('basket', auth()->user()->id) }}">Want to view your basket?</a>
      </div>
    @endif

    <div class = "shoe_img">
      <img src="/images/{{ $product->product_image }}" alt="Shoes" height="500px" width="500px">
    </div>
 
    <div class = "product_sect">
      <!--<p>Product ID: {{ $product->product_id }}</p>-->

      <!--<p>Product Name: {{ $product->product_name}}</p>
      <p>Product Brand: {{ $product->product_brand }}</p>
      <p>Product Category: {{ $product->product_category }}</p>
      <p>Product Description: {{ $product->product_description}}</p>-->

      <h2 id = "title">{{ $product->product_brand }} - {{ $product->product_name}}</h2>
      <h5 id = "price">£{{ $product->product_price }}</h5>
      <hr id = "line_style">
      <div class = "size_select">
        <h6 id = "size_caption">Choose Size: </h6>
          <form class = "size_buttons" action="{{ route('basket.store') }}" method="POST">
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
              
              <div class = "quantity_sect">
                <label><b>Quantity </b>
                  <select id = "select_box" name="quantity" id="quantity">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                </label>
              </div>
              
              <br><button id = "basket_button" type="submit" btn btn-primary><p id = "atb_text">Add to basket</p></button>
            </form>
      </div>
        <hr id = "line_style">
        <p id = "desc">{{ $product->product_description}}</p>
</div>
@endsection