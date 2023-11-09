<x-dropdown align="left" width="auto">
    <x-slot name="trigger">
        <span class="inline-flex rounded-md">
            <x-secondary-button type="button" class="flex items-center">
                <span>
                    <x-icon-arrow-down x-show="!open" class="mr-2 -ml-0.5 w-4 h-4" />

                    <x-icon-arrow-up x-show="open" style="display: none;" class="mr-2 -ml-0.5 w-4 h-4" />
                </span>
                {{ Auth::user()->name }}
            </x-secondary-button>
        </span>
    </x-slot>

    <x-slot name="content">
        <div class="block px-4 py-2">
            <div class="text-sm text-zinc-700 dark:text-zinc-300">
                {{ Auth::user()->name }}
            </div>

            <div class="text-xs text-zinc-400">
                {{ Auth::user()->email }}
            </div>
        </div>

        {{-- Dropdown navigation --}}
        <div class="border-t border-zinc-200 dark:border-zinc-600"></div>

        <x-dropdown-link wire:navigate href="{{ route('home') }}">
            <x-slot name="icon">
                <x-icon-home class="w-4 h-4" />
            </x-slot>

            {{ __('Home') }}
        </x-dropdown-link>

        <x-dropdown-link wire:navigate href="{{ route('user.dashboard') }}">
            <x-slot name="icon">
                <x-icon-dashboard class="w-4 h-4" />
            </x-slot>

            {{ __('Your Dashboard') }}
        </x-dropdown-link>

        {{-- Account Management --}}
        <div class="border-t border-zinc-200 dark:border-zinc-600"></div>

        <div class="block px-4 py-2 text-xs text-zinc-600 dark:text-zinc-400">
            {{ __('Manage Account') }}
        </div>

        <x-dropdown-link wire:navigate href="{{ route('user.profile') }}">
            <x-slot name="icon">
                <x-icon-profile class="w-4 h-4" />
            </x-slot>

            {{ __('Profile') }}
        </x-dropdown-link>

        <x-dropdown-link wire:navigate href="{{ route('user.settings') }}">
            <x-slot name="icon">
                <x-icon-setting class="w-4 h-4" />
            </x-slot>

            {{ __('Settings') }}
        </x-dropdown-link>

        {{-- Authentication --}}
        <div class="border-t border-zinc-200 dark:border-zinc-600"></div>

        <div class="block px-4 py-2 text-xs text-zinc-600 dark:text-zinc-400">
            {{ __('Authentication') }}
        </div>

        @if (session()->has('auth.password_confirmed_at'))
            <x-dropdown-button wire:click="disableAdminMode">
                <x-slot name="icon">
                    <x-icon-disable class="w-4 h-4" />
                </x-slot>

                {{ __('Disable Admin Mode') }}
            </x-dropdown-button>
        @endif

        <x-dropdown-button wire:click="logout">
            <x-slot name="icon">
                <x-icon-logout class="w-4 h-4" />
            </x-slot>

            {{ __('Log Out') }}{{ session()->has('auth.password_confirmed_at') ? ' + ' . __('Disable Admin Mode') : '' }}
        </x-dropdown-button>
    </x-slot>
</x-dropdown>
