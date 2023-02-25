<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('css')
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <title>Laravel</title>
    </head>
    <body>
        
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
        @endguest
            
    
            
        @yield('content')
    </body>
</html>