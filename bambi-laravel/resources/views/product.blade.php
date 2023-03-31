@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/product.css">
@endsection

@section('content')

    @error('size')
    <div class="alert alert-warning" role="alert">
      <p>{{ $message }}</p>
    </div>
    @enderror

    @if (session('add'))
      <div class="alert alert-success" role="alert">
        <p>{{ session('add') }}: <a href="{{ route('basket', auth()->user()->id) }}">Want to view your basket?</a>
      </div>
    @endif
    @if (session('stock'))
      <div class="alert alert-warning" role="alert">
        <p>{{ session('stock') }}</p>
      </div>
    @endif

    <div class = "shoe_img">
      <img src="https://bambiadmin.azurewebsites.net/images/{{ $product->product_image }}" alt="Shoes" height="500px" width="500px">
    </div>
 
    <div class = "product_sect">
      <h2 id = "title">{{ $product->product_brand }} - {{ $product->product_name}}</h2>
      <h5 id = "price">£{{ $product->product_price }}</h5>
      <hr id = "line_style">
      <div class = "size_select">
        <h6 id = "size_caption">Choose Size: </h6>
          <form class = "size_buttons" action="{{ route('basket.store') }}" method="POST">
            @csrf
              <input type="hidden" name="product" id="product" value="{{ $product->product_id }}">

              @foreach ($sizes as $size)
              <input type="radio" id="size-{{$size->product_size}}" name="size" value="{{$size->product_size}}" class="radio"
              @if ($size->product_stock <= 0)
                  disabled
              @endif
              >
              <label class="label label-{{ $loop->index + 1}}" for="size-{{$size->product_size}}"
                @if ($size->product_stock <= 0)
                data-bs-toggle="tooltip" data-bs-placement="top" title="Out Of Stock"
                style="background-color: #808080;"
                @endif
              >{{$size->product_size}}</label>
              @endforeach
              
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
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection