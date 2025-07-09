@props([
	'variant' => 'primary',
	'link' => false
])

@php
    $tag = $link ? 'a' : 'button';
@endphp

<{{ $tag }} {{ $attributes->class([
	'cursor-pointer group inline-flex items-center gap-2 py-2 px-4 rounded-md text-sm font-medium border transition-colors',
	'text-white border-blue-500 bg-blue-500 hover:border-blue-600 hover:bg-blue-600' => $variant === 'primary',
	'text-blue-500 border-blue-500 hover:text-white hover:bg-blue-500' => $variant === 'outline',
	'text-gray-600 border-gray-200 hover:text-gray-800 hover:border-gray-300 hover:bg-gray-100' => $variant === 'outline-gray',
	'text-white border-red-600 bg-red-600 hover:border-red-700 hover:bg-red-700' => $variant === 'danger',
]) }}>
{{ $slot }}
</{{ $tag }}>