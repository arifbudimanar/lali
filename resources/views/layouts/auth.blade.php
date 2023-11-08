<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}{{ Route::currentRouteName() ? '- ' . __(ucwords(str_replace('.', ' ', Route::currentRouteName()))) : '' }}
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
