<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <div class="footer">
        <br>
        <br>
        <div class="footer-content">
            <div class="footer-logo" id="foot-content-box">
                <a href="/" class="logo"><img src="/images/Bambi_Shoes_Logo_no-bg.png" alt="" /></a>
            </div>
            <div class="footer-section-links" id="foot-content-box">
              @if(!(auth()->user()))
                <a class="active" href="/shop">Shop</a><br>
                <a href="/about">About Us</a><br>
                <a href="/contact">Contact Us</a><br>
                <br>
                <li><button type="submit" class="login-btn li-right"><a class="login-btn" href="/login">Log In</a></button></li>
            </div>
                <!-- <li><button type="submit" class="login-btn li-right"><a class="login-btn" href="/login">Log In</a></button></li> -->
              @else
            <div class="footer-section-links" id="foot-content-box">
                <a class="active" href="/shop">Shop</a><br>
                <a href="/about">About Us</a><br>
                <a href="/contact">Contact Us</a><br>
                <br>
                <a href="/basket">Basket({{$sumOfItems}})</a><br>
                <a href="/logout">Logout</a>
              @endif
            </div>
        </div>
    </div>

    
       

<!-- <div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="Team-18-Project-Laravel\bambi-laravel\resources\images\Bambi-Shoes-Logo-Text-only-1.png"/></svg>
      </a>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Section</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
      </ul>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>

  </footer>
</div> -->

@yield('content')
</body>









    
</html>