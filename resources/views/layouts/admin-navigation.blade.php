<nav class="fixed z-10 w-full bg-white border-b border-zinc-100 lg:hidden lg:w-full dark:bg-zinc-800 dark:border-zinc-700"
    x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div class="px-2 sm:px-4">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center lg:hidden">
                {{-- Mobile menu button --}}
                <button type="button" @click="open = ! open"
                    class="relative inline-flex items-center justify-center px-3 py-2 ml-2 rounded-md text-zinc-800 dark:text-white hover:bg-zinc-100 hover:dark:bg-zinc-900"
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

            <div class="flex items-center justify-start flex-1 ml-4 lg:ml-0 sm:items-stretch">
                {{-- Logo --}}
                <div class="flex items-center flex-shrink-0 lg:hidden sm:mr-10">
                    <x-logo />
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Profile dropdown --}}
                <div class="relative ml-3 " x-data="{ open: false }">
                    <div class="mr-2 sm:mr-2">
                        @include('layouts.partials.admin-user-dropdown-navigation')
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Mobile menu, show/hide based on menu state. --}}
    <div class="hidden max-h-screen overflow-auto border-t border-zinc-100 lg:hidden dark:border-zinc-700"
        id="mobile-menu" :class="{ 'block': open, 'hidden': !open }" x-show='open'
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
        {{-- Mobile navigation --}}
        <div class="px-4 py-2 space-y-1 sm:px-6">
            <x-responsive-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                {{ __('Admin Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link wire:navigate href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.*')">
                {{ __('Users') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link wire:navigate href="{{ route('admin.example') }}" :active="request()->routeIs('admin.example')">
                {{ __('Example') }}
            </x-responsive-nav-link>

            <x-nav-dropdown title="{{ __('Nav Dropdown Example') }}" :active="request()->routeIs('admin.dashboard')">
                <x-responsive-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Admin Dashboard') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link wire:navigate href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')">
                    {{ __('Users') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link wire:navigate href="{{ route('admin.example') }}" :active="request()->routeIs('admin.example')">
                    {{ __('Example') }}
                </x-responsive-nav-link>

                <x-nav-dropdown title="{{ __('Nested Nav Dropdown Example') }}" :active="request()->routeIs('admin.dashboard')">
                    <x-responsive-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Admin Dashboard') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link wire:navigate href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')">
                        {{ __('Users') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link wire:navigate href="{{ route('admin.example') }}" :active="request()->routeIs('admin.example')">
                        {{ __('Example') }}
                    </x-responsive-nav-link>
                </x-nav-dropdown>
            </x-nav-dropdown>
        </div>

        {{-- Warning --}}
        <div class="px-4 py-2 space-y-1 sm:px-6">
            <div id="dropdown-cta" class="p-3 bg-orange-100 rounded-lg dark:bg-orange-900" role="alert">
                <div class="flex items-center mb-3">
                    <span
                        class="bg-orange-200 text-orange-900 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-700 dark:text-orange-100">
                        {{ __('Warning') }}
                    </span>
                </div>

                <p class="text-sm text-orange-900 dark:text-orange-100">
                    {{ __('Becareful when accessing admin dashboard. Some actions can not be undone.') }}
                </p>
            </div>
        </div>
    </div>
</nav>
