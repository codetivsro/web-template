<x-app-layout title="{{ $page->meta_title ?? $page->name }}">
    <x-container>
        <h1 class="mb-6">{{ $page->title_h1 ?? $page->name }}</h1>
        {!! html_entity_decode($page->content) !!}
    </x-container>
</x-app-layout>