<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <title>
        {{ Route::currentRouteName() ? __(ucwords(str_replace('.', ' ', Route::currentRouteName()) . ' | ')) : '' }}
        {{ config('app.name', 'Laravel') }}
    </title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Style --}}
    @livewireStyles
</head>

<body class="bg-zinc-100 dark:bg-zinc-900 text-zinc-900 dark:text-zinc-100">
    <x-toaster-hub />

    {{-- Page Content --}}
    <div
        class="min-w-full min-h-screen font-sans antialiased sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-zinc-800 sm:bg-dotted-zinc-300">
        {{ $slot }}
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
