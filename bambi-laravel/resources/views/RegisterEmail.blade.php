@component('mail::message')
    
    <strong>Hello {{ $firstName }} {{ $lastName }},</strong>
    <p>Thank you for registering!</p>
    <p>Welcome to Bambi, where you can shop all things designer.</p>
    <p>Click below to start your shop.</p>
    @component('mail::button', ['url' => route('welcome')])
        Start Shopping
    @endcomponent

@endcomponent
