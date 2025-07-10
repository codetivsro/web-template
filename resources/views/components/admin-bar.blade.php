@if(auth()->check() && auth()->user()->is_admin)
    <div x-data="{ show: false }" class="fixed left-5 top-5">
        <button @click="show = !show"
                class="cursor-pointer size-14 rounded-full flex justify-center items-center text-gray-100 shadow bg-gray-900 hover:shadow-lg transition-shadows">
            <x-heroicon-o-wrench-screwdriver class="size-7"/>
        </button>
        <div @click.outside.window="show = false" class="absolute left-0 top-16 p-5 w-max flex flex-col gap-4 rounded-md shadow-lg bg-gray-900" x-show="show" x-transition x-cloak>
            <a href="{{ url('/admin') }}"
               class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                <x-heroicon-m-power class="size-5"/>
                <span>{{ __('Administration') }}</span>
            </a>
            <a href="{{ route('cache.clear') }}" class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                <x-heroicon-o-circle-stack class="size-5"/>
                <span>{{ __('Delete cache') }}</span>
            </a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit"
                        class="cursor-pointer w-full flex items-center gap-2 text-sm text-gray-200 hover:text-gray-100">
                    <x-heroicon-m-arrow-left-start-on-rectangle class="size-5"/>
                    <span>{{ __('Log out') }}</span>
                </button>
            </form>
        </div>
    </div>
@endif