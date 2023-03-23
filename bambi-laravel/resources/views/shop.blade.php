@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/shop.css">
@endsection

@section('content')
  <input type="hidden" id="anPageName" name="page" value="shop" />
  <div class="container-center-horizontal">
    <div class="shop screen">
      <div class="hero">
        <div class="flex-col flex">
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
            <div class="search-1 valign-text-middle montserrat-normal-black-24px">Search</div>
            <div class="overlap-group1">
              <img class="icon-search" src="/Website-Images/magnifying-glass-icon.png" alt="icon-search" />
            </div>
          </div>
          <div class="women montserrat-bold-black-24px">WOMEN</div>
          <div class="all-womens-shoes montserrat-bold-black-24px">All womens shoes</div>
          <div class="trainers montserrat-normal-black-24px">Trainers</div>
          <div class="search-item montserrat-normal-black-24px">Boots</div>
          <div class="search-item montserrat-normal-black-24px">Heels</div>
          <div class="search-item montserrat-normal-black-24px">Flats</div>
          <div class="search-item montserrat-normal-black-24px">Sandals</div>
          <div class="men montserrat-bold-black-24px">MEN</div>
          <div class="all-mens-shoes montserrat-bold-black-24px">All mens shoes</div>
          <div class="search-item montserrat-normal-black-24px">Trainers</div>
          <div class="search-item montserrat-normal-black-24px">Loafers</div>
          <div class="search-item montserrat-normal-black-24px">Boots</div>
          <div class="search-item montserrat-normal-black-24px">Dress Shoes</div>
          <div class="search-item montserrat-normal-black-24px">Sliders</div>
        </div>




      <div class="items-1 items-2">
      <h1 class="title">Shop All Shoes</h1>
      <!-- <div class="grid-container flex-col flex"> -->

      <div class="prod_box">

        @foreach ($products as $product)

              <article class="items items-2 grid-item">

                
              <div class="rectangle"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>


              <div class="place valign-text-middle montserrat-semi-bold-black-20px">{{ $product->product_brand }}
                </div>
              <div class="model valign-text-middle montserrat-normal-black-15px">{{ $product->product_name }}</div>
              <div class="surname valign-text-middle montserrat-semi-bold-black-15px">£{{ $product->product_price }}
              </div>

              <a href="{{ route('products.show', $product->product_id) }}">

              <div class="button button-3">
                <div class="log-in-1 valign-text-middle montserrat-bold-white-15px">View Item</div>
                </div>

              </a>

              </article>

        
        @endforeach

      </div>





          <!-- <div class="flex-col flex">


              @php
              $prod_counter = 0;
              @endphp


              @foreach ($products as $product)



              @if($prod_counter == 0)

              <div class="items-container-3">

                <article class="items items-2">

                
                <div class="rectangle"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>


                <div class="place valign-text-middle montserrat-semi-bold-black-20px">{{ $product->product_brand }}
                  </div>
                  <div class="model valign-text-middle montserrat-normal-black-15px">{{ $product->product_name }}</div>
                  <div class="surname valign-text-middle montserrat-semi-bold-black-15px">£{{ $product->product_price }}
                  </div>

                  <a href="{{ route('products.show', $product->product_id) }}">

                    <div class="button button-3">
                      <div class="log-in-1 valign-text-middle montserrat-bold-white-15px">View Item</div>
                    </div>

                  </a>

                </article>



                @elseif($prod_counter == 1)

                <article class="items items-2">
                <div class="rectangle"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>
                  <div class="place valign-text-middle montserrat-semi-bold-black-20px">{{ $product->product_brand }}
                  </div>
                  <div class="model valign-text-middle montserrat-normal-black-15px">{{ $product->product_name }}</div>
                  <div class="surname valign-text-middle montserrat-semi-bold-black-15px">£{{ $product->product_price }}
                  </div>

                  <a href="{{ route('products.show', $product->product_id) }}">

                    <div class="button button-3">
                      <div class="log-in-1 valign-text-middle montserrat-bold-white-15px">View Item</div>
                    </div>

                  </a>

                </article>



                @elseif($prod_counter == 2)

                <article class="items items-2">
                <div class="rectangle"><img src="/images/{{ $product->product_image}}" alt="Shoes" ></div>
                  <div class="place valign-text-middle montserrat-semi-bold-black-20px">{{ $product->product_brand }}
                  </div>
                  <div class="model valign-text-middle montserrat-normal-black-15px">{{ $product->product_name }}</div>
                  <div class="surname valign-text-middle montserrat-semi-bold-black-15px">£{{ $product->product_price }}
                  </div>

                  <a href="{{ route('products.show', $product->product_id) }}">

                    <div class="button button-3">
                      <div class="log-in-1 valign-text-middle montserrat-bold-white-15px">View Item</div>
                    </div>

                  </a>

                </article>

              </div>

              @endif


              @php
              $prod_counter = ($prod_counter + 1) % 3
              @endphp

              @endforeach

              @if($prod_counter !== 2)
            </div>
            @endif


          
        </div>
      </div> -->
    <!-- </div> -->
    <div class="credit-hero">
      <p class="spread-the-cost-with">
        Spread the cost with up to 4 years interest free credit* Subject to T&amp;Cs
      </p>
      <p class="shop-shoes-from-14">
        Shop shoes from £14.07 per month*. 0% finance is available on all purchases over £99.
      </p>
    </div>
    <div class="footer-a">
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
    </div>
  </div>
  </div>
@endsection