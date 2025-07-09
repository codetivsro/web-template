<x-app-layout title="{{ $page->meta_title ?? $page->name }}">
    <div class="page py-6">
        <x-container>
            <h1 class="mb-6 text-2xl md:text-3xl font-semibold">{{ $page->title_h1 ?? $page->name }}</h1>
            {!! html_entity_decode($page->content) !!}
        </x-container>
    </div>
</x-app-layout>