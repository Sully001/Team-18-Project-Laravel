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
<div class="shopscreen">
  <div class="navbar">
    <div class="navbar-link-shopvalign-text-middlenavbar-linkmontserrat-semi-bold-alpine-15px">Shop</div>
    <div class="navbar-link-about-usvalign-text-middlemontserrat-semi-bold-alpine-15px">About Us</div>
    <div class="navbar-link-contact-usvalign-text-middlemontserrat-semi-bold-alpine-15px">Contact Us</div>
    <div class="navbar-link-basketvalign-text-middlenavbar-linkmontserrat-semi-bold-alpine-15px">Basket</div>
    <img
      class="bambi-shoes-logo-text-only-1"
      src="bambi-shoes-logo-text-only-1.png"
      alt="Bambi Shoes Logo Text only 1"
    />
    <div class="button-1button-3">
      <div class="log-invalign-text-middlemontserrat-bold-white-15px">Log in</div>
    </div>
  </div>
  <div class="hero">
    <div class="flex-colflex">
      <p class="receive-and-extra-spmontserrat-medium-black-32px">
        <span class="montserrat-medium-black-32px">Receive and extra special </span><span class="span1">free gift</span
        ><span class="montserrat-medium-black-32px"> with your luxury shoes!</span>
      </p>
      <p class="lorem-ipsum-dolor-si">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate.
      </p>
    </div>
    <img class="rectangle-15" src="rectangle-15.png" alt="Rectangle 15" />
  </div>
  <div class="overlap-group2">
    <div class="search">
      <div class="overlap-group">
        <div class="search-1valign-text-middlemontserrat-normal-black-24px">Search</div>
        <div class="overlap-group1">
          <img
            class="icons8-magnifying-glass-64-1-1"
            src="icons8-magnifying-glass-64-1-1.png"
            alt="icons8-magnifying-glass-64 (1) 1"
          />
        </div>
      </div>
      <div class="womenmontserrat-bold-black-24px">WOMEN</div>
      <div class="all-womens-shoesmontserrat-bold-black-24px">All womens shoes</div>
      <div class="heelsmontserrat-normal-black-24px">Heels</div>
      <div class="search-itemmontserrat-normal-black-24px">Boots</div>
      <div class="search-itemmontserrat-normal-black-24px">Trainers</div>
      <div class="search-itemmontserrat-normal-black-24px">Flats</div>
      <div class="search-itemmontserrat-normal-black-24px">New in</div>
      <div class="placeplace-2montserrat-normal-black-24px">Sale</div>
      <div class="menmontserrat-bold-black-24px">MEN</div>
      <div class="all-mens-shoesmontserrat-bold-black-24px">All mens shoes</div>
      <div class="search-itemmontserrat-normal-black-24px">Boots</div>
      <div class="search-itemmontserrat-normal-black-24px">Trainers</div>
      <div class="search-itemmontserrat-normal-black-24px">Loafers</div>
      <div class="welliesmontserrat-normal-black-24px">Wellies</div>
      <div class="search-itemmontserrat-normal-black-24px">New in</div>
      <div class="search-itemmontserrat-normal-black-24px">Sale</div>
      <div class="childenmontserrat-bold-black-24px">CHILDREN</div>
      <div class="all-kids-shoesmontserrat-bold-black-24px">All kids shoes</div>
      <div class="school-shoesmontserrat-normal-black-24px">School shoes</div>
      <div class="trainersmontserrat-normal-black-24px">Trainers</div>
      <div class="bootsmontserrat-normal-black-24px">Boots</div>
      <div class="velcro-shoesmontserrat-normal-black-24px">Velcro shoes</div>
      <div class="lace-up-shoesmontserrat-normal-black-24px">Lace-up shoes</div>
      <div class="online-exclusivemontserrat-normal-black-24px">Online Exclusive</div>
      <div class="placeplace-2montserrat-normal-black-24px">Sale</div>
    </div>
    <div class="items-1items-2">
      <h1 class="titlemontserrat-normal-black-48px">Shop All Shoes</h1>
      <div class="flex-rowflex">
        <div class="items-container-3">
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
        </div>
        <div class="items-container-2items-container-3">
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
        </div>
        <div class="items-containeritems-2">
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
        </div>
        <div class="items-containeritems-2">
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
          <article class="itemsitems-2">
            <div class="rectangle"></div>
            <div class="place-1valign-text-middleplace-2montserrat-semi-bold-black-20px">Brand</div>
            <div class="modelvalign-text-middlemontserrat-normal-black-15px">Model</div>
            <div class="surnamevalign-text-middlemontserrat-semi-bold-black-15px">Price</div>
            <div class="buttonbutton-3">
              <div class="log-in-1valign-text-middlemontserrat-bold-white-15px">View Item</div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  <div class="credit-hero">
    <p class="spread-the-cost-withmontserrat-normal-black-48px">
      Spread the cost with up to 4 years interest free credit* Subject to T&amp;Cs
    </p>
    <p class="shop-shoes-from-14">Shop shoes from £14.07 per month*. 0% finance is available on all purchases over £99.</p>
  </div>
  <div class="footer-a">
    <div class="flex-row-1">
      <img class="logo-no-bg-01-3" src="logo-no-bg-01-3.png" alt="logo no bg-01 3" />
      <div class="shop-1montserrat-bold-alpine-15px">Shop</div>
      <div class="t-usmontserrat-bold-alpine-15px">About Us</div>
      <div class="t-usmontserrat-bold-alpine-15px">Contact Us</div>
      <div class="button-2button-3">
        <div class="log-invalign-text-middlemontserrat-bold-white-15px">Log in</div>
      </div>
    </div>
    <div class="rectangle-1"></div>
    <div class="flex-row-2">
      <p class="copyrightmontserrat-normal-black-15px">© Bambi Shoes LTD, 2022</p>
      <div class="follow-usmontserrat-normal-black-15px">Follow us:</div>
      <img class="ellipse-1ellipse-3" src="ellipse.svg" alt="Ellipse" /><img
        class="ellipse-2ellipse-3"
        src="ellipse.svg"
        alt="Ellipse"
      /><img class="ellipseellipse-3" src="ellipse.svg" alt="Ellipse" /><img
        class="ellipseellipse-3"
        src="ellipse.svg"
        alt="Ellipse"
      />
    </div>
  </div>
</div>