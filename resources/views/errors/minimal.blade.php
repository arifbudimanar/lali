<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <title>
        @yield('title') | {{ config('app.name', 'Laravel') }}
    </title>

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles --}}
    @livewireStyles
</head>

<body class="antialiased">
    <div class="relative flex items-center justify-center min-h-screen bg-zinc-100 items-top dark:bg-zinc-900 sm:pt-0">
        <div class="max-w-xl mx-auto">
            <div class="max-w-screen-xl mx-auto ">
                <div class="text-center">
                    <x-logo />

                    <h1 class="mb-4 font-extrabold tracking-tight text-indigo-500 text-9xl">
                        @yield('code')
                    </h1>

                    <p class="mb-8 text-4xl font-bold tracking-tight text-zinc-700 dark:text-zinc-300">
                        @yield('message')
                    </p>

                    @if ($exception->getStatusCode() == 404)
                        <p class="mb-8 text-2xl font-bold tracking-tight text-zinc-700 dark:text-zinc-300">
                            {{ __('Sorry, we can\'t find that page.') }}
                        </p>
                    @endif

                    @if ($exception->getStatusCode() == 503)
                        <p class="mb-8 text-2xl font-bold tracking-tight text-zinc-700 dark:text-zinc-300">
                            {{ __('We are currently performing some maintenance. We will be back shortly.') }}
                        </p>
                    @endif

                    @unless ($exception->getStatusCode() == 503)
                        <x-button-link href="{{ route('home') }}" wire:navigate>
                            {{ __('Home') }}
                        </x-button-link>
                    @endunless
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
