@props([
	'item'
])

<a href="{{ $item['url'] }}" @if($item['open_in_new_tab']) target="_blank" @endif class="hover:underline">{{ $item['label'] }}</a>