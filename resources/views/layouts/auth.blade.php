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

<body class="bg-gray-100 dark:bg-gray-900">
    <div
        class="min-w-full min-h-screen font-sans antialiased text-gray-900 bg-gray-100 sm:bg-center dark:text-gray-100 dark:bg-gray-900 sm:bg-dotted-spacing-6 sm:dark:bg-dotted-gray-800 sm:bg-dotted-gray-300">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
