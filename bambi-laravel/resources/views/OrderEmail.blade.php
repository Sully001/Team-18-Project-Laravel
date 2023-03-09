@component('mail::message')
    
    <strong>Hello {{ auth()->user()->first_name }} {{ auth()->user()->last_name }},</strong>
    <p>Thank you for ordering!</p>
    <p>Here is a quick summary of your order.</p>

@foreach ($order as $item)
<h2 class="shoe-title">Shoe: {{$item['name']}}</h2><br>
<h2>Shoe Size: {{$item['size']}}</h2><br>
<h2>Quantity: {{$item['quantity']}}</h2><br>
-------------------------------------
@endforeach
<br>
<h2>Total: £{{$total}}</h2> 
<p>For a more detailed breakdown of your order please visit your order details via your account.</p>

@component('mail::button', ['url' => route('welcome')])
        Go To Your Account
@endcomponent
@endcomponent
