@props(['url'])
<tr>
<td class="header">
<a href="{{ route('welcome') }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/images/Bambi_Shoes_Logo_no-bg.png'))) }}" class="logo" alt="Bambi">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

