@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection


@section('content')

    @if (session('mssg'))
        {{ session('mssg') }}
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">

<div class = "page">
    <div id = "log_reg">
        <div class = "form_sect" id = "reg_form">
            <div class = "header_caption">
                <h2 class = "header" id = "register_header">Register</h2>
                <p class = "caption" id = "register_header">Sign up today, it’s free</p>
            </div>
            <form class = "forms_" action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <!--<label for="first_name">First Name:</label>-->
                    <input class = "input_fields" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                </div>
                @error('first_name')
                    <p>{{ $message }}</p>
                @enderror
                <div>
                    <!--<label for="last_name">Last Name:</label>-->
                    <input class = "input_fields" type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
                </div>
                @error('last_name')
                    <p>{{ $message }}</p>
                @enderror
                <div>
                    <!--<label for="email">Email</label>-->
                    <input class = "input_fields"  type="email" name="email" id="email" placeholder="Email address" value="{{ old('email') }}">
                </div>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                <div>
                    <!--<label for="password">Password</label>-->
                    <input class = "input_fields"  type="password" name="password" id="password" placeholder="Password">
                </div>
                <div>
                    <!--<label for="password_confirmation">Repeat Password</label>-->
                    <input class = "input_fields" type="password" name="password_confirmation" id="password_confirmation" placeholder="Password">
                </div>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror

                <button id = "reg_submit" class = "submit_button" type="submit">Register</button>
            </form>
        </div>

        <div class = "form_sect">
        <div class = "header_caption">
            <h2 class = "header" id = "login_header">Login</h2>
            <p class = "caption" id = "register_header">Sign up today, it’s free</p>
        </div>

            @if (session('status'))
                {{ session('status') }}
            @endif

            <form class = "forms_" action="{{ route('signin') }}" method="POST">
                @csrf
                <div>
                    <!--<label for="email">Email</label>-->
                    <input class = "input_fields"  type="email" name="email" id="email" placeholder="Email address" value="{{ old('email') }}">
                </div>
                <div>
                    <!--<label for="password">Password</label>-->
                    <input class = "input_fields"  type="password" name="password" id="password" placeholder="Password">
                </div>
                <button id = "log_submit" class = "submit_button" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection