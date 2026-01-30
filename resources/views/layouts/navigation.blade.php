<div class="hidden sm:flex sm:items-center sm:ms-6 space-x-6">

    {{-- SELECTOR DE IDIOMA --}}
    <div class="flex space-x-2 text-sm font-medium">
        <a href="{{ route('lang.switch', 'es') }}"
           class="hover:underline {{ app()->getLocale() === 'es' ? 'font-bold' : '' }}">
            ES
        </a>
        <a href="{{ route('lang.switch', 'en') }}"
           class="hover:underline {{ app()->getLocale() === 'en' ? 'font-bold' : '' }}">
            EN
        </a>
        <a href="{{ route('lang.switch', 'fr') }}"
           class="hover:underline {{ app()->getLocale() === 'fr' ? 'font-bold' : '' }}">
            FR
        </a>
    </div>

    {{-- USUARIO LOGUEADO --}}
    @auth
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">
                    {{ Auth::user()->name }}
                </button>
            </x-slot>

            <x-slot name="content">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('messages.logout') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    @endauth

</div>
