@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/shop.css">
  <link rel="stylesheet" href="/css/globals.css">


@endsection

@section('content')
  <input type="hidden" id="anPageName" name="page" value="shop" />
  <div class="container-center-horizontal flex">
      
    <div class="shop screen">

      <div class="hero">
        <div class="flex-col  flex">
          <p class="receive-and-extra-sp montserrat-medium-black-32px">
            <span class="montserrat-medium-black-32px">Receive and extra special </span><span class="span1">free
              gift</span><span class="montserrat-medium-black-32px"> with your luxury shoes!</span>
          </p>
          <p class="lorem-ipsum-dolor-si">
            With shoe purchases £100 or more, choose between free Dubbin waterproofing or any accessory worth up to £20.
            And with shoe purchases between £100 and £500, you’ll receive lifetime warranty on us. Just consider it a
            gift from us to you.
          </p>
        </div>
        <img class="rectangle-15" src="/Website-Images/rectangle-15.png" alt="Rectangle 15" />
      </div>
      
      
      
      
      <div class="overlap-group2">
        
        <div class="search">
          
          <div class="overlap-group">
            <div class="search-1 valign-text-middle montserrat-normal-black-24px">
            <form action="{{route('search')}}" class="search-bar">
                <input type="Search" name="search" id="search" placeholder="Search">
                <!-- <button type="submit"><img src="/Website-Images/magnifying-glass-icon.png"></button> -->
              </form>
            </div>
            <div class="overlap-group1">
              <button type="submit"><img src="/Website-Images/magnifying-glass-icon.png"></button>
              <!-- <img class="icon-search" src="/Website-Images/magnifying-glass-icon.png" alt="icon-search" /> -->
            </div>
          </div>

          <div class="women montserrat-bold-black-24px">WOMEN</div>
          <a href="{{route('products.women')}}"><div class="all-womens-shoes montserrat-bold-black-24px">All womens shoes</div></a>
          <a href="{{route('women.trainers')}}"><div class="trainers montserrat-normal-black-24px">Trainers</div></a>
          <a href="{{route('women.boots')}}"><div class="search-item montserrat-normal-black-24px">Boots</div></a>
          <a href="{{route('women.heels')}}"><div class="search-item montserrat-normal-black-24px">Heels</div></a>
          <a href="{{route('women.flats')}}"><div class="search-item montserrat-normal-black-24px">Flats</div></a>
          <a href="{{route('women.sandals')}}"><div class="search-item montserrat-normal-black-24px">Sandals</div></a>
          
          <div class="men montserrat-bold-black-24px">MEN</div>
          <a href="{{route('products.men')}}"><div class="all-mens-shoes montserrat-bold-black-24px">All mens shoes</div></a>
          <a href="{{route('men.trainers')}}"><div class="search-item montserrat-normal-black-24px">Trainers</div></a>
          <a href="{{route('men.loafers')}}"><div class="search-item montserrat-normal-black-24px">Loafers</div></a>
          <a href="{{route('men.boots')}}"><div class="search-item montserrat-normal-black-24px">Boots</div></a>
          <a href="{{ route('men.dress')}}"><div class="search-item montserrat-normal-black-24px">Dress Shoes</div></a>
          <a href="{{ route('men.sliders')}}"><div class="search-item montserrat-normal-black-24px">Sliders</div></a>
        </div>



        <div class="items-1 items-2">
          <a href="{{ route('products.index')}}"><h1 class="title">Shop All Shoes</h1></a>
          

          <!-- <div class="flex-row flex"> -->
          
          <div class="prod_box flex">

            @foreach ($products as $product)

              <article class="items items-2 grid-item">

                <div class="rectangle"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>
                <div class="place valign-text-middle montserrat-semi-bold-black-20px">{{ $product->product_brand }}</div>
                <div class="model valign-text-middle montserrat-normal-black-15px">{{ $product->product_name }}</div>
                <div class="surname valign-text-middle montserrat-semi-bold-black-15px">£{{ $product->product_price }}</div>

                <a href="{{ route('products.show', $product->product_id) }}">
                <div class="button button-3">
                  <div class="log-in-1 valign-text-middle montserrat-bold-white-15px">View Item</div>
                </div>
                </a>

              </article>        
              
            @endforeach
          </div>
          <!-- </div> -->
        </div>
      </div>

      <div class="credit-hero">
        <p class="spread-the-cost-with">
          Spread the cost with up to 4 years interest free credit* Subject to T&amp;Cs
        </p>
        <p class="shop-shoes-from-14">
          Shop shoes from £14.07 per month*. 0% finance is available on all purchases over £99.
        </p>
      </div>
    
      <!-- <div class="footer-a">
        <div class="flex-row-1 montserrat-bold-alpine-15px">
          <img class="transparent-logo1.png" src="/Website-Images/transparent-logo2-large.png" alt="transparent logo" />
          <div class="shop-1">Shop</div>
          <div class="t-us">About Us</div>
          <div class="t-us">Contact Us</div>
          <div class="button-2 button-3">
            <div class="log-in valign-text-middle montserrat-bold-white-15px">Log in</div>
          </div>
        </div>
        <div class="rectangle-1"></div>
        
        <div class="flex-row-2 montserrat-normal-black-15px-2">
          <p class="copyright">© Bambi Shoes LTD, 2022</p>
          <div class="follow-us">Follow us:</div>
          <img class="ellipse-1 ellipse-3" src="/Website-Images/ellipse.svg" alt="Ellipse" />
          <img class="ellipse-2 ellipse-3" src="/Website-Images/ellipse.svg" alt="Ellipse" />
          <img class="ellipse ellipse-3" src="/Website-Images/ellipse.svg" alt="Ellipse" />
          <img class="ellipse ellipse-3" src="/Website-Images/ellipse.svg" alt="Ellipse" />
        </div>

      </div> -->
    </div>
  </div>
@endsection