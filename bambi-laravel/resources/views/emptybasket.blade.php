@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/emptybasket.css">
@endsection

@section('content')
<div class="emptybasket-bg">

  <div class="basket-container">
      <div class="your-basket"> 
        <h1 id = "basket-heading">Your Basket is Empty</h1>
      </div>
      <div class="basket-text">
        <p>You currently do not have any items in your basket.</p>
        <p>Browse our latest products to find the perfect new pair for your collection!</p>
        <br/>
        <button type="button" class="login-btn" onclick=window.location.href="{{ route('products.index') }}">Start Browsing</button>
      </div>
  </div>

</div>
@endsection
