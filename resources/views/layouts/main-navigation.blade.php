<nav class="fixed z-10 w-full bg-white border-b border-zinc-100 dark:bg-zinc-800 dark:border-zinc-700"
    x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center sm:hidden">
                {{-- Mobile menu button --}}
                <button type="button" @click="open = ! open"
                    class="relative inline-flex items-center justify-center px-3 py-2 ml-2 rounded-md text-zinc-500 bg-zinc-100 dark:text-zinc-400 dark:bg-zinc-900 hover:text-zinc-800 dark:hover:text-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>

                    <span class="sr-only">Open main menu</span>

                    <svg class="block w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />

                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-start flex-1 ml-4 sm:ml-0 sm:items-stretch">
                {{-- Logo --}}
                <div class="flex items-center flex-shrink-0 sm:mr-10">
                    <x-logo />
                </div>

                {{-- Navigation --}}
                <div class="hidden sm:-my-px sm:block">
                    <div class="flex space-x-4">
                        <x-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>

                        <x-nav-link wire:navigate href="{{ route('example') }}" :active="request()->routeIs('example')">
                            {{ __('Example') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Profile dropdown --}}
                <div class="relative ml-3" x-data="{ open: false }">
                    @auth
                        <div class="mr-2 sm:mr-0">
                            @include('layouts.partials.main-user-dropdown')
                        </div>
                    @else
                        <div class="mr-2 space-x-2 sm:mr-0">
                            <x-secondary-button-link wire:navigate href="{{ route('register') }}" :active="request()->routeIs('register')"
                                class="hidden lg:inline-block ">
                                {{ __('Register') }}
                            </x-secondary-button-link>

                            <x-button-link wire:navigate href="{{ route('login') }}" :active="request()->routeIs('login')">
                                {{ __('Login') }}
                            </x-button-link>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    {{-- Mobile menu, show/hide based on menu state. --}}
    <div class="hidden border-t border-zinc-100 sm:hidden dark:border-zinc-700" id="mobile-menu"
        :class="{ 'block': open, 'hidden': !open }" x-show='open' x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
        {{-- Mobile navigation --}}
        <div class="px-4 py-2 space-y-1 sm:px-6">
            <x-responsive-nav-link wire:navigate href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link wire:navigate href="{{ route('example') }}" :active="request()->routeIs('example')">
                {{ __('Example') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
