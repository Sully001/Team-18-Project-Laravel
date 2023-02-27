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

        <title>Bambi</title>

    </head>

    <body>

    <div class="navbar">
        <ul>
          <div class="nav-logo" id="nav-logo">
            <a href="/"><img src="/images/Bambi-Shoes-Logo-Text-only-1.png" alt style="width:15vw; height:9vh;"></a></img>
          </div>
          <li><a class="active li" href="/shop">Shop</a></li>
          <li><a class="li" href="/about">About Us</a></li>
          <li><a class="li" href="/contact">Contact Us</a></li>
          <li><a class="li" href="/basket">Basket</a></li>
          <li><button type="submit" class="login-btn li-right"><a class="login-btn" href="/login">Log In</a></button></li>
        </ul>
    </div>
 
        
        <a href="{{ route('welcome') }}">
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
        @endguest
        

        @auth
        {{-- Form should be styled inline to fit in the navbar --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
            <p>Logged in:{{ auth()->user()->first_name }} {{auth()->user()->last_name}}</p> 
            
            <a href="{{ route('basket', auth()->user()->id) }}">
                <button>Basket</button>
            </a>
        @endauth
        
        @guest
            <p>No user logged in</p>
            <button>Basket</button>
            
        @endguest
            
    <!-- <div class="footer">
        <br>
        <br>
        <div class="footer-content">
            <div class="footer-logo" id="foot-content-box">
                <a href="/" class="logo"><img src="/images/Bambi_Shoes_Logo_no-bg.png" alt="" /></a>
            </div>
            <div class="footer-links" id="foot-content-box">
                <a class="active" href="/shop">Shop</a><br>
                <a href="/about">About Us</a><br>
                <a href="/contact">Contact Us</a><br>
                <br>
                <li><button type="submit" class="login-foot li-right"><a class="login-foot" href="/login">Log In</a></button></li>
            </div>
            <div class="container">
              <div class="d-flex justify-content-between py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                  <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  </a>
                  <span class= "mb-md-0 text-muted">&copy; Bambi Shoes LTD, 2023</span>
                </div>
                <ul class="nav col-md-4 justify-content-end">
                  <span class= "mb-md-0 text-muted" style="text-align: right; letter-spacing:-0.015em;">Follow Us:</span>
                  <li class="ms-3"><a class="text-muted" href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                  <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/accounts/login/"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                  <li class="ms-3"><a class="text-muted" href="https://en-gb.facebook.com/"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
              </div>
            </div>
        </div>
    </div> -->  
            
        @yield('content')
    </body>
</html>