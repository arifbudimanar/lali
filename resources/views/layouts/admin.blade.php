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
        {{ $title ?? null ? __($title) . ' | ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles --}}
    @livewireStyles
</head>

<body
    class="h-screen font-sans antialiased lg:flex bg-zinc-100 dark:bg-zinc-900 sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-zinc-800 sm:bg-dotted-zinc-300"
    x-data="{ open: false }">
    <x-toaster-hub />

    <livewire:layouts.admin-sidebar />

    <div class="w-full overflow-y-auto">
        <livewire:layouts.admin-navigation />

        {{-- Page Heading --}}
        @isset($header)
            <header class="pt-16 bg-white lg:pt-0 border-zinc-100 lg:border-b dark:bg-zinc-800 dark:border-zinc-700">

                @env('production')
                <div class="block lg:hidden">
                    <x-banner type="warning">
                        <p class="text-sm text-center">
                            {{ __('It\'s not recommended to open the admin panel on a mobile device.') }}
                        </p>
                    </x-banner>
                </div>

                @if (Route::currentRouteName() === 'admin.dashboard')
                    <x-banner type="info">
                        <p class="text-sm text-center">
                            {{ __('It\'s better if you show your support by giving it a star. Thanks.') }}
                            <a href="https://github.com/arifbudimanar/lali" target="_blank" class="ml-1 underline">
                                Github
                            </a>
                        </p>
                    </x-banner>
                @endif

                <x-banner type="info">
                    <p class="text-sm text-center">
                        {{ __('Try the pro version for more features.') }}
                        <a href="http://143.198.206.231/" target="_blank" class="ml-1 underline">
                            Lali Pro
                        </a>
                    </p>
                </x-banner>
                @endenv

                <div class="flex items-center justify-between w-full h-16 px-4 mx-auto sm:px-6 lg:px-8">
                    {{-- Header --}}
                    <div>
                        {{ $header }}
                    </div>

                    {{-- Actions --}}
                    @isset($actions)
                        <div class="space-x-2">
                            {{ $actions }}
                        </div>
                    @endisset
                </div>
            </header>
        @endisset

        {{-- Page Content --}}
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
