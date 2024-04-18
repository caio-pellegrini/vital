<nav x-data="{ open: false }" class="font-readex border-b border-gray-100">

    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 text-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-center items-center h-20">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('/') }}">
                        <x-application-logo></x-application-logo>
                    </a>
                </div>
                <!-- Search Bar -->
                <div class="grow my-3 px-6">
                    <form action="">

                    </form>
                </div>
                <!-- Settings Dropdown -->
                @if (Route::has('login'))
                    <div class="flex items-center">
                        @auth
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border-gray-500 border-2 leading-4 rounded-md text-verde-escuro dark:bg-gray-800 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ mb_strtoupper(Auth::user()->name, 'UTF-8') }}</div>
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('SAIR') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @else
                            <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link :href="route('register')">
                                    {{ __('CADASTRE-SE') }}
                                </x-nav-link>
                                @if (Route::has('register'))
                                    <x-nav-link :href="route('login')">
                                        {{ __('ENTRAR') }}
                                    </x-nav-link>
                                @endif
                            </div>
                        @endauth
                    </div>
                @endif
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto px-2 sm:px-4 lg:px-8 bg-cinza-header text-white border-b-[3px] border-verde-escuro">
        <div class="flex justify-center items-center h-6 sm:h-8">
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:flex">
                <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                    {{ __('INÍCIO') }}
                </x-nav-link>
                <x-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                    {{ __('CONTATO') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('INÍCIO') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                {{ __('CONTATO') }}
            </x-responsive-nav-link>
        </div>
        <!-- Responsive Settings Options -->
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('SAIR') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">CADASTRE-SE</a>
                    @endif
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ENTRAR</a>
                @endauth
            </div>
        @endif
    </div>
</nav>
