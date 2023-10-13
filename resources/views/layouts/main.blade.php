<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}
        {{ Route::currentRouteName() ? '- ' . __(ucwords(str_replace('.', ' ', Route::currentRouteName()))) : '' }}
    </title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body
    class="h-screen overflow-y-auto font-sans antialiased bg-gray-100 dark:bg-gray-900 sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-gray-800 sm:bg-dotted-gray-300">
    <livewire:layouts.main-navigation />

    <!-- Page Heading -->
    @if (isset($header))
        <header class="pt-16 bg-white dark:bg-gray-800">
            @if (session()->has('auth.password_confirmed_at'))
                <x-banner type="danger">
                    <p class="text-sm font-medium sm:text-center ">
                        {{ __('Admin mode still active. If no longer needed, please disable it.') }}
                    </p>
                </x-banner>
            @endif
            <div class="flex items-center justify-between h-16 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="">
                    {{ $header }}
                </div>
                @if (isset($actions))
                    <div class="space-x-2">
                        {{ $actions }}
                    </div>
                @endif
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @stack('modals')

    @livewireScripts
</body>

</html>
