@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection


@section('content')

    @if (session('mssg'))
        {{ session('mssg') }}
    @endif


    <h1>Register Section</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ old('first_name') }}">
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="youremail@example.com" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <label for="password_confirmation">Repeat Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password">
        </div>

        <div class="errorCheck">
            @if($errors->any())
                <div class="statusCheck">
                 @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit">Register</button>
    </form>

    <h1>Login Section</h1>

    @if (session('status'))
        {{ session('status') }}
    @endif

    <form action="{{ route('signin') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="youremail@example.com" value="{{ old('email') }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>

        <div class="errorCheck">
            @if($errors->any())
                <div class="statusCheck">
                 @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit">Login</button>
    </form>
@endsection