<x-app-layout title="Super čuper web">
    <div class="py-[100px]">
        <x-container class="text-center">
            <h1 class="mb-4 text-3xl md:text-4xl font-semibold">{{ content_block('home_title', 'Super čuper web', true) }}</h1>
            <p class="mb-6 text-gray-600">Opravdu super čuper startovací web pro jen ty nejlepší firmy.</p>
            <div class="flex items-center justify-center gap-4">
                <x-button>Více o nás</x-button>
                <x-button variant="outline-gray">Kontakt</x-button>
            </div>
        </x-container>
    </div>
</x-app-layout>