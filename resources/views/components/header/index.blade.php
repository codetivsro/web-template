@php
    $menu = \App\Models\Menu::identify('header');
@endphp

<header class="py-6 border-b border-gray-200">
    <x-container class="flex items-center">
        <a href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-6">
        </a>
        <x-header.menu :menu="$menu"/>
    </x-container>
</header>