<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            {{-- IZQUIERDA (logo o vacío) --}}
            <div class="flex items-center">
                {{-- aquí puede ir el logo --}}
            </div>

            {{-- DERECHA (IDIOMA + USUARIO) --}}
            <div class="flex items-center">
                {{-- AQUÍ VA TU BLOQUE --}}
                <div class="hidden sm:flex sm:items-center ml-auto space-x-6">

                    {{-- SELECTOR DE IDIOMA --}}
                    <x-dropdown align="right" width="64">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">

                                @if(app()->getLocale() === 'es')
                                    <img src="https://flagcdn.com/w20/es.png" alt="ES">
                                    <span>ES</span>
                                @elseif(app()->getLocale() === 'en')
                                    <img src="https://flagcdn.com/w20/gb.png" alt="EN">
                                    <span>EN</span>
                                @elseif(app()->getLocale() === 'fr')
                                    <img src="https://flagcdn.com/w20/fr.png" alt="FR">
                                    <span>FR</span>
                                @endif

                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">

                            <x-dropdown-link
                                href="{{ route('lang.switch', 'es') }}"
                                class="flex w-full items-center justify-center gap-4 px-4 py-2 text-center">
                                <img src="https://flagcdn.com/w20/es.png" alt="ES">
                                <span>Español</span>
                            </x-dropdown-link>

                            <x-dropdown-link
                                href="{{ route('lang.switch', 'en') }}"
                                class="flex w-full items-center justify-center gap-4 px-4 py-2 text-center">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN">
                                <span>English</span>
                            </x-dropdown-link>

                            <x-dropdown-link
                                href="{{ route('lang.switch', 'fr') }}"
                                class="flex w-full items-center justify-center gap-4 px-4 py-2 text-center">
                                <img src="https://flagcdn.com/w20/fr.png" alt="FR">
                                <span>Français</span>
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown>

                    {{-- USUARIO LOGUEADO --}}
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">
                                    {{ Auth::user()->name }}
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link
                                        :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('messages.logout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth

                </div>

            </div>

        </div>
    </div>
</nav>
