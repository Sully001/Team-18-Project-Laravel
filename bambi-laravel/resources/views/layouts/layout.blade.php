<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <title>Bambi</title>

    </head>

    <body>

    <div class="navbar">
        <ul>
          <div class="nav-logo" id="nav-logo">
            <a href="{{ route('welcome') }}"><img src="/images/Bambi-Shoes-Logo-Text-only-1.png" alt style="width:15vw; height:9vh;"></a></img>
          </div>
          <li><a class="active li" href="{{ route('products.index') }}">Shop</a></li>
          <li><a class="li" href="/about">About Us</a></li>
          <li><a class="li" href="/contact">Contact Us</a></li>
          <li><a class="li" href="/basket">Basket</a></li>
          @guest
          <li><button type="submit" class="login-btn li-right"><a class="login-btn" href="{{ route('login') }}">Log In</a></button></li>
          @endguest
          </ul>
    </div>
 
        
        <!-- <a href="{{ route('welcome') }}">
            <button>Home</button>
        </a>
        <a href="{{ route('products.index') }}">
            <button>Shop</button>
        </a>
        @guest
             <a href="{{ route('login') }}">
                <button>Login</button>
            </a>
            <a href="{{ route('login') }}">
                <button>Register</button>
            </a>
        @endguest -->
        

        @auth
        {{-- Form should be styled inline to fit in the navbar --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
          <!-- <li><button type="submit" class="login-btn li-right"><a class="login-btn">Log Out</a></button></li> -->
          <button>Log Out</button>
        </form>
            <p>Logged in:{{ auth()->user()->first_name }} {{auth()->user()->last_name}}</p> 
            
            <a href="{{ route('basket', auth()->user()->id) }}">
                <button>Basket</button>
            </a>
            <!-- <li><a class="li" href="{{ route('basket', auth()->user()->id) }}">Basket</a></li> -->
        @endauth
        
        @guest
            <!-- <p>No user logged in</p>
            <button>Basket</button> -->
            
        @endguest
            
        @yield('content')

  <div class="footer">
        <div class="footer-content">
            <div class="footer-logo" id="foot-content-box">
                <a href="/" class="logo"><img src="/images/Bambi_Shoes_Logo_no-bg.png" alt="" /></a>
            </div>
            <div class="footer-links" id="foot-content-box">
                <a class="active" href="/shop">Shop</a><br>
                <a href="/about">About Us</a><br>
                <a href="/contact">Contact Us</a><br>
                <button type="button" onclick=window.location.href="{{ route('login') }}" class="login-foot li-right">Log In</button>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
          <div class="d-flex justify-content-between my-4">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              </a>
              <span class= "mb-md-0 text-muted">&copy; Bambi Shoes LTD, 2023</span>
            </div>

            <div class="social">
                <p>Follow Us:</p>
                <div class="facebook">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class='bx bxl-facebook  bx-sm'></i>
                    </a>
                </div>
                <div class="twitter">
                    <a href="https://www.twitter.com/" target="_blank">
                        <i class='bx bxl-twitter bx-sm'></i>
                    </a>
                </div>
                <div class="tiktok">
                    <a href="https://www.tiktok.com/" target="_blank">
                        <i class='bx bxl-tiktok bx-sm'></i>
                    </a>
                </div>
                <div class="instagram">
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class='bx bxl-instagram bx-sm'></i>
                    </a>
                </div>
            </div>
          </div>
        </div>
  </div>  

  

    </body>
</html>