@if(auth()->check() && auth()->user()->is_admin)
    <div x-data="{ show: false }" class="fixed left-5 top-5">
        <button @click="show = !show"
                class="cursor-pointer size-14 rounded-full flex justify-center items-center text-gray-100 shadow bg-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="size-6">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                <path d="M4 6l8 0"/>
                <path d="M16 6l4 0"/>
                <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                <path d="M4 12l2 0"/>
                <path d="M10 12l10 0"/>
                <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                <path d="M4 18l11 0"/>
                <path d="M19 18l1 0"/>
            </svg>
        </button>
        <div @click.outside.window="show = false" class="absolute left-0 top-16 p-5 w-max flex flex-col gap-4 rounded-md shadow-lg bg-gray-900" x-show="show">
            <a href="{{ url('/admin') }}"
               class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="size-4">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 5h12l3 5l-8.5 9.5a.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5"/>
                    <path d="M10 12l-2 -2.2l.6 -1"/>
                </svg>
                <span>Administrace</span>
            </a>
            <a href="{{ route('cache.clear') }}" class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="size-4">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0"/>
                    <path d="M4 6v6a8 3 0 0 0 16 0v-6"/>
                    <path d="M4 12v6a8 3 0 0 0 16 0v-6"/>
                </svg>
                <span>Smazat cache</span>
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit"
                        class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="size-4">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2"/>
                        <path d="M15 12h-12l3 -3"/>
                        <path d="M6 15l-3 -3"/>
                    </svg>
                    <span>Odhlásit se</span>
                </button>
            </form>
        </div>
    </div>
@endif