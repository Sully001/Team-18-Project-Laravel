@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/contact.css">
@endsection

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">

<div id = "top_half">
  <div id = "inner_box">
    <h1 class = "bold_heading">Get in touch</h1> 
    <p id = "para">
      Our team in the UK is available between the hours of 08:00am and 19:00pm GMT/BST, but you may find what you are looking for even quicker by checking out our Frequently Asked Questions. If you can’t you can still contact us via our webform or by calling our customer service team.<br><br>
      If you chose to contact us via our webform, please include as much information as you can in the text box below, including billing address, order date, return date, return tracking code, product description & any other relevant info. Please allow 72 business hours for us to respond to your enquiry and please note email response will be in English.<br><br>
      If you'd like to speak to us you can call us on the following number: <br>
      <p class = "semi-bold">UK Customers 0344 576 6444</p>
      <p class = "semi-bold">International Customers +44 344 576 6444 </p>
      Calls are in English and will be charged at your network providers rates. Opening times may vary during UK bank holidays.
    </p>
  </div>
</div>

<div id = "bottom_half">
  <div id = "form_contact">
    <div id = "contacts_container">
      <h1 class = "bold_heading">Contact Us</h1>
      <p class = "subheading">For any enquiries, please contact us.</p>
    </div>
    <div id="form">
      <form action="{{ route('contact.email') }}" method="POST">
        @csrf
        <input class="input_fields" name="firstName" type="text" placeholder="First Name"><br>
        @error('firstName')
            <p class="error">{{ $message }}</p>
        @enderror
        <input class="input_fields" name="lastName" type="text" placeholder="Last Name"><br>
        @error('lastName')
            <p class="error">{{ $message }}</p>
        @enderror
        <input class="input_fields" name="email" type="text" placeholder="Email address"><br>
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
        <textarea id="message_box" name="message" class = input_fields type="text" placeholder="Your message"></textarea><br>
        @error('message')
            <p class="error">{{ $message }}</p>
        @enderror
        <button class="submit_button" type="submit">Submit</button>
      </form>
      @If(session('sent'))
        <div class="alert alert-success" role="alert">
          {{session('sent')}}
        </div>
      @endif
    </div>
  </div>
</div>
@endsection
