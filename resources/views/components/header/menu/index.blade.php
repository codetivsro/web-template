@props([
	'menu'
])

@if($menu)
    <nav class="md:ms-8 flex flex-col md:flex-row gap-5">
        @foreach($menu->items as $item)
            <x-header.menu.item :item="$item"/>
        @endforeach
    </nav>
@endif