@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/emptyorder.css">
@endsection

@section('content')

<div class="emptyorders-bg">

  <div class="eorder-contain">
      <div class="no-orders"> 
        <h1 id = "order-heading">You haven't placed any orders</h1>
      </div>
      <div class="order-text">
        <p>Looks like you haven't made any purchases with us just yet.</p>
        <p>Shop our exclusive range to discover new styles and find your next favourite piece!</p>
        <br/>
        <button type="button" class="login-btn" onclick=window.location.href="{{ route('products.index') }}">Continue Shopping</button>
      </div>
  </div>

</div>

@endsection
