@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/about.css">
@endsection

@section('content')
<div class="about-bg">

  <div class="about-container">
    <div class="who"> 
      <h1 id = "heading">Who We Are</h1>
    </div>
    <div class="about-para">
      <p>Bambi Shoes is a recent and up-and-coming British shoe retailer. Founded in 2022, our focus is to serve you 
        the latest and most astounding high-end shoe products in the market.</p>
      <p>We want to offer you the greatest, most fashionable shoes so that you can live life in style! That is our ultimate mission.</p>
      <p>Browse through our catalogue and have a glance at our range of shoes; our team is here to support you to find you the 
        special shoe you’re looking for.</p>
    </div>
  </div>

  <div class="about-images">
    <div class="a-img1"> 
      <img src="/Website-Images/about-us-mens.png" alt="">
    </div>
    <div class="a-img2"> 
      <img src="/Website-Images/about-us-img.png" alt="">
    </div>
    <div class="a-img3"> 
      <img src="/Website-Images/about-us-womens.png" alt="">
    </div>
  </div>

</div>
@endsection
