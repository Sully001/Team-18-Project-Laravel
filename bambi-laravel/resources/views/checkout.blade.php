@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/checkout.css">
@endsection

@section('content')
<div class="check-bg">

  <div class="check-container">
      <div class="check-confirm"> 
        <h1 id = "check-heading">Thank you {{Auth::user()->first_name}}, your order has been placed!</h1>
      </div>
      <div class="check-text">
        <p>We are currently processing your purchase. Email confirmation of your order will be sent to {{Auth::user()->email}} shortly.</p>
        <p>To view your order status and details, please click the button below.</p>
        <br/>
        <button type="button" class="login-btn" onclick=window.location.href="{{ route('orders')}}">View Order</button>
      </div>
  </div>

</div>
@endsection
