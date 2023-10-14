<nav class="relative w-full bg-white border-b border-gray-100 lg:hidden lg:w-full dark:bg-gray-800 dark:border-gray-700"
    x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div class="px-2 sm:px-4">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center lg:hidden">
                <!-- Mobile menu button-->
                <button type="button" @click="open = ! open"
                    class="relative inline-flex items-center justify-center px-3 py-2 ml-2 text-gray-500 bg-gray-100 rounded-md dark:text-gray-400 dark:bg-gray-900 hover:text-gray-800 dark:hover:text-white"
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
                <div class="flex items-center flex-shrink-0 lg:hidden">
                    <x-logo />
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Notification --}}
                {{-- <button type="button"
                    class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button> --}}

                <!-- Profile dropdown -->
                <div class="relative ml-3 " x-data="{ open: false }">
                    <div class="mr-2 sm:mr-2">
                        <x-dropdown align="right" width="auto">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <x-secondary-button type="button" class="flex items-center">
                                        {{ Auth::user()->first_name }}
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!open" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="ml-2 -mr-0.5 w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" x-show="open"
                                                style="display: none;" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="ml-2 -mr-0.5 w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </span>
                                    </x-secondary-button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="block px-4 py-2">
                                    <div class="text-sm text-gray-700 dark:text-gray-300">
                                        {{ Auth::user()->name }}
                                    </div>
                                    <div class="text-xs text-gray-400">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>

                                <!-- Public Page -->
                                <div class="border-t border-gray-200 dark:border-gray-600"></div>
                                <x-dropdown-link wire:navigate href="{{ route('home') }}">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                        </svg>


                                    </x-slot>

                                    {{ __('Home') }}
                                </x-dropdown-link>

                                <x-dropdown-link wire:navigate href="{{ route('user.dashboard') }}">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                                        </svg>

                                    </x-slot>

                                    {{ __('Your Dashboard') }}
                                </x-dropdown-link>

                                <x-dropdown-link wire:navigate href="{{ route('user.settings') }}">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </x-slot>

                                    {{ __('Settings') }}
                                </x-dropdown-link>

                                <!-- Account Management -->
                                <div class="border-t border-gray-200 dark:border-gray-600"></div>
                                <div class="block px-4 py-2 text-xs text-gray-600 dark:text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link wire:navigate href="{{ route('user.profile') }}">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>

                                    </x-slot>

                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                                @if (session()->has('auth.password_confirmed_at'))
                                    <x-dropdown-button wire:click="disableAdminMode">
                                        <x-slot name="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                            </svg>
                                        </x-slot>

                                        {{ __('Disable Admin Mode') }}
                                    </x-dropdown-button>
                                @endif

                                <x-dropdown-button wire:click="logout">
                                    <x-slot name="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                        </svg>
                                    </x-slot>

                                    {{ __('Log Out') }}
                                    {{ session()->has('auth.password_confirmed_at') ? __('Account') : '' }}
                                </x-dropdown-button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden border-t border-gray-100 lg:hidden dark:border-gray-700" id="mobile-menu"
        :class="{ 'block': open, 'hidden': !open }" x-show='open'
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
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

            <x-nav-dropdown name="Dropdown Menu" :active="request()->routeIs('admin.dashboard')">
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
        </div>
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
