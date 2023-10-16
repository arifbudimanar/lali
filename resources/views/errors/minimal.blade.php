<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body class="antialiased">
    <div
        class="relative flex items-center justify-center min-h-screen bg-zinc-100 items-top dark:bg-zinc-900 sm:pt-0 sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-zinc-800 sm:bg-dotted-zinc-300">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
                <div class="max-w-screen-sm mx-auto text-center">
                    <h1 class="mb-4 font-extrabold tracking-tight text-indigo-500 text-9xl">
                        @yield('code')
                    </h1>

                    <p class="mb-8 text-4xl font-bold tracking-tight text-zinc-700 dark:text-zinc-300">
                        @yield('message')
                    </p>

                    <x-button-link href="{{ route('home') }}" wire:navigate>
                        {{ __('Back to Homepage') }}
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
