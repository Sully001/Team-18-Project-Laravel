@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/shop.css">
  <link rel="stylesheet" href="/css/globals.css">


@endsection

@section('content')
  <input type="hidden" id="anPageName" name="page" value="shop" />
  <div class="container-center-horizontal flex">
      
    <div class="shop screen">

      <div class="shop-header">
        <div class="flex-col  flex">
          <p class="header-promo-title header-text">
            <span class="header-text">Receive and extra special </span><span class="span1">free
              gift</span><span class="header-text"> with your luxury shoes!</span>
          </p>
          <p class="header-promo">
            With shoe purchases £100 or more, choose between free Dubbin waterproofing or any accessory worth up to £20.
            And with shoe purchases between £100 and £500, you’ll receive lifetime warranty on us. Just consider it a
            gift from us to you.
          </p>
        </div>
        <img class="header-img" src="/Website-Images/rectangle-15.png" alt="Header Image" />
      </div>
      
      <div class="main">
        
        <div class="search">
          
          <div class="overlap-group">
            <div class="search-1 body-text">
            <form action="{{route('search')}}" class="search-bar">
                <input type="Search" name="search" id="search" placeholder="Search">
                <!-- <button type="submit"><img src="/Website-Images/magnifying-glass-icon.png"></button> -->
              <!-- </form> -->
            </div>
            <div class="overlap-group1">
              <button type="submit"><img src="/Website-Images/magnifying-glass-icon.png"></button>
            </form>
            </div>
          </div>

          <div class="sort-by">
            <label for="sort">Sort By</label>
            <a class="link" href="{{ URL::current()."?sort=desc" }}"><div>High to Low</div></a>
            <a class="link" href="{{ URL::current()."?sort=asc" }}"><div>Low to High</div></a>
          </div>

          <div class="women">WOMEN</div>
          <a href="{{route('products.women')}}"><div class="all-womens-shoes body-text">All womens shoes</div></a>
          <a href="{{route('women.trainers')}}"><div class="trainers body-text">Trainers</div></a>
          <a href="{{route('women.boots')}}"><div class="search-prods body-text">Boots</div></a>
          <a href="{{route('women.heels')}}"><div class="search-prods body-text">Heels</div></a>
          <a href="{{route('women.flats')}}"><div class="search-prods body-text">Flats</div></a>
          <a href="{{route('women.sandals')}}"><div class="search-prods body-text">Sandals</div></a>
          
          <div class="men">MEN</div>
          <a href="{{route('products.men')}}"><div class="all-mens-shoes body-text">All mens shoes</div></a>
          <a href="{{route('men.trainers')}}"><div class="search-prods body-text">Trainers</div></a>
          <a href="{{route('men.loafers')}}"><div class="search-prods body-text">Loafers</div></a>
          <a href="{{route('men.boots')}}"><div class="search-prods body-text">Boots</div></a>
          <a href="{{ route('men.dress')}}"><div class="search-prods body-text">Dress Shoes</div></a>
          <a href="{{ route('men.sliders')}}"><div class="search-prods body-text">Sliders</div></a>
        </div>

        <div class="products-overlay-1 products-overlay-2">
          <a href="{{ route('products.index')}}"><h1 class="title">Shop All Shoes</h1></a>

          <div class="prod-box flex">

            @foreach ($products as $product)

              <article class="products products-overlay-2 grid-item">

                <div class="prod-img"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>
                <div class="prod-brand">{{ $product->product_brand }}</div>
                <div class="prod-name">{{ $product->product_name }}</div>
                <div class="prod-price">£{{ $product->product_price }}</div>

                <a href="{{ route('products.show', $product->product_id) }}">
                <div class="button button-3">
                  <div class="view-item">View Item</div>
                </div>
                </a>

              </article>        
              
            @endforeach
          </div>
          <div>
            {{ $products->links() }}
          </div>
        </div>
      </div>

      <div class="shop-footer">
        <p class="footer-text">
        Spread the cost with up to 4 years interest free credit*
        <br></br>
        Subject to T&amp;Cs
        <br></br>
          Shop shoes from £14.07 per month*. 0% finance is available on all purchases over £99.
        </p>
      </div>
    </div>
  </div>
@endsection