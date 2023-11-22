<x-dropdown align="right" width="auto">
    <x-slot:trigger>
        <span class="inline-flex rounded-md">
            <x-secondary-button type="button" class="flex items-center">
                {{ Auth::user()->first_name }}
                <span>
                    <x-icon-arrow-down x-show="!open" class="ml-2 -mr-0.5 w-4 h-4" />

                    <x-icon-arrow-up x-show="open" style="display: none;" class="ml-2 -mr-0.5 w-4 h-4" />
                </span>
            </x-secondary-button>
        </span>
    </x-slot:trigger>

    <x-slot:content>
        <div class="block px-4 py-2">
            <div class="text-sm text-zinc-700 dark:text-zinc-300">
                {{ Auth::user()->name }}
            </div>

            <div class="text-xs text-zinc-400">
                {{ Auth::user()->email }}
            </div>
        </div>

        {{-- Dropdown navigation --}}
        <x-divider />

        <x-dropdown-link wire:navigate href="{{ route('home') }}">
            <x-slot:icon>
                <x-icon-home class="w-4 h-4" />
            </x-slot:icon>

            {{ __('Home') }}
        </x-dropdown-link>

        <x-dropdown-link wire:navigate href="{{ route('admin.dashboard') }}">
            <x-slot:icon>
                <x-icon-dashboard class="w-4 h-4" />
            </x-slot:icon>

            {{ __('Admin Dashboard') }}
        </x-dropdown-link>

        {{-- Account Management --}}
        <x-divider />

        <div class="block px-4 py-2 text-xs text-zinc-600 dark:text-zinc-400">
            {{ __('Manage Account') }}
        </div>

        <x-dropdown-link wire:navigate href="{{ route('user.profile') }}">
            <x-slot:icon>
                <x-icon-profile class="w-4 h-4" />
            </x-slot:icon>

            {{ __('Profile') }}
        </x-dropdown-link>

        <x-dropdown-link wire:navigate href="{{ route('user.settings') }}">
            <x-slot:icon>
                <x-icon-setting class="w-4 h-4" />
            </x-slot:icon>

            {{ __('Settings') }}
        </x-dropdown-link>

        {{-- Authentication --}}
        <x-divider />

        <div class="block px-4 py-2 text-xs text-zinc-600 dark:text-zinc-400">
            {{ __('Authentication') }}
        </div>

        @if (session()->has('auth.password_confirmed_at'))
            <x-dropdown-button wire:click="disableAdminMode">
                <x-slot:icon>
                    <x-icon-disable class="w-4 h-4" />
                </x-slot:icon>

                {{ __('Disable Admin Mode') }}
            </x-dropdown-button>
        @endif

        <x-dropdown-button wire:click="logout">
            <x-slot:icon>
                <x-icon-logout class="w-4 h-4" />
            </x-slot:icon>

            {{ __('Log Out') }}{{ session()->has('auth.password_confirmed_at') ? ' + ' . __('Disable Admin Mode') : '' }}
        </x-dropdown-button>
    </x-slot:content>
</x-dropdown>
