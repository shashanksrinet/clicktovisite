@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://clicktovisite.com/storage/logos/logo.png" style="width: 148px; height:65px;" class="logo" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
