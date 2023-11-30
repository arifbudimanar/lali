<nav class="hidden w-full h-screen bg-white border-r-0 border-zinc-100 lg:min-h-full lg:border-r lg:max-w-xs lg:block lg:relative dark:bg-zinc-800 dark:border-zinc-700"
    :class="{ 'block': open, 'hidden': !open, 'absolute': open }">
    <div class="h-screen overflow-y-auto">
        {{-- Logo --}}
        <div class="flex items-center h-16 px-4 bg-white sm:px-6 dark:bg-zinc-800">
            <x-logo />
        </div>

        {{-- Profile dropdown --}}
        <div class="relative px-4 pt-4 border-t border-zinc-100 dark:border-zinc-700" x-data="{ open: false }">
            <div class="flex justify-between w-full">
                @include('layouts.partials.admin-user-dropdown-sidebar')
            </div>
        </div>

        <div
            class="flex flex-col justify-between w-full gap-2 px-2 py-2 bg-white border-t border-b border-zinc-100 lg:max-w-xs dark:bg-zinc-800 lg:border-t-0 lg:border-b-0 sm:px-4 lg:py-4 dark:border-zinc-700">
            {{-- Navigation --}}
            <div class="flex flex-col gap-1">
                <x-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                    {{ __('Admin Dashboard') }}
                </x-nav-link>

                <x-nav-link wire:navigate href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.*')">
                    {{ __('Users') }}
                </x-nav-link>

                <x-nav-link wire:navigate href="{{ route('admin.example') }}" :active="request()->routeIs('admin.example')">
                    {{ __('Example') }}
                </x-nav-link>

                <x-nav-dropdown title="{{ __('Dropdown Example') }}" :active="request()->routeIs('admin.dashboard')">
                    <x-nav-link wire:navigate href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Admin Dashboard') }}
                    </x-nav-link>

                    <x-nav-link wire:navigate href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')">
                        {{ __('User') }}
                    </x-nav-link>

                    <x-nav-link wire:navigate href="{{ route('admin.example') }}" :active="request()->routeIs('admin.example')">
                        {{ __('Example') }}
                    </x-nav-link>
                </x-nav-dropdown>
            </div>

            {{-- Warning --}}
            <div class="mt-2">
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
    </div>
</nav>
