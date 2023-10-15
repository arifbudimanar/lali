<nav class="hidden w-full h-screen bg-white border-r-0 border-gray-100 lg:min-h-full lg:border-r lg:max-w-xs lg:block lg:relative dark:bg-gray-800 dark:border-gray-700"
    :class="{ 'block': open, 'hidden': !open, 'absolute': open }">
    <div class="h-screen overflow-y-auto">
        <div class="flex items-center h-16 px-4 bg-white sm:px-6 dark:bg-gray-800">
            <x-logo />
        </div>
        <div class="relative px-4 border-t border-gray-100 dark:border-gray-700" x-data="{ open: false }">
            <div class="pt-4">
                @include('layouts.partials.admin-user-dropdown-sidebar')
            </div>
        </div>

        <div
            class="flex flex-col justify-between w-full gap-2 px-2 py-2 bg-white border-t border-b border-gray-100 lg:max-w-xs dark:bg-gray-800 lg:border-t-0 lg:border-b-0 sm:px-4 lg:py-4 dark:border-gray-700">
            <div class="flex flex-col gap-1">
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
