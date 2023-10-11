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
    class="flex h-screen font-sans antialiased bg-gray-100 dark:bg-gray-900 sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-gray-800 sm:bg-dotted-gray-300"
    x-data="{ open: false }">
    {{-- <x-banner /> --}}

    <livewire:layouts.admin-sidebar />
    <div class="w-full overflow-y-auto">
        <livewire:layouts.admin-navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white border-gray-100 lg:border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between w-full h-16 px-4 mx-auto sm:px-6 lg:px-8">
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
        <main class="max-h-screen">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
