@component('mail::message')
<h3>Message From:</h3>
<strong>Name: {{$firstName}} {{ $lastName }}</strong>
<br>
<strong>Email: {{ $email }}</strong>
<br>
<p>{{$message}}</p>
@endcomponent

