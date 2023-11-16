<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        {{-- Welcome main --}}
        <x-app-card width="full" title="{{ __('Welcome to :appname', ['appname' => config('app.name')]) }}">
            @auth
                <x-slot name="description">
                    {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}
                </x-slot>
            @endauth
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Lali (Laravel Livewire) Starter Kit') }}"
            description="{{ __('A powerful foundation for building web applications with the TALL stack.') }}">
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-4 sm:gap-6">
                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Styling') }}
                        </h3>

                        <a href="https://tailwindcss.com/"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Tailwind CSS') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Interactivity') }}
                        </h3>

                        <a href="https://alpinejs.dev/"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Alpine JS') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Backend') }}
                        </h3>

                        <a href="https://laravel.com/"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel 10') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Frontend') }}
                        </h3>

                        <a href="https://livewire.laravel.com/"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Livewire 3') }}
                        </a>
                    </div>
                </div>
            </x-slot>
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Built In Laravel Package') }}">
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-3 sm:gap-6">
                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Debuger') }}
                        </h3>

                        <a href="https://github.com/barryvdh/laravel-debugbar"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel Debugbar') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('IDE Helper') }}
                        </h3>

                        <a href="https://github.com/barryvdh/laravel-ide-helper"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel IDE Helper') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Testing') }}
                        </h3>

                        <a href="https://pestphp.com/"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('PEST') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Toaster') }}
                        </h3>

                        <a href="https://github.com/masmerise/livewire-toaster"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Livewire Toaster') }}
                        </a>
                    </div>

                    <div
                        class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 sm:col-span-2 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Translation') }}
                        </h3>

                        <a href="https://github.com/Laravel-Lang/lang"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel Lang') }}
                        </a>

                        <a href="https://github.com/LarsWiegers/laravel-translations-checker"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel Translation Checker') }}
                        </a>
                    </div>
                </div>
            </x-slot>
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Built In Tailwind Plugin') }}">
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-3 sm:gap-6">
                    <div class="p-4 rounded-lg sm:p-6 bg-zinc-100 sm:col-span-2 2xl:col-span-1 dark:bg-zinc-900">
                        <a href="https://github.com/hiimnit/tailwindcss-dotted-background"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Dotted Background') }}
                        </a>
                    </div>

                    <div class="p-4 rounded-lg sm:p-6 bg-zinc-100 dark:bg-zinc-900">
                        <a href="https://tailwindcss.com/docs/typography-plugin"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Typography') }}
                        </a>
                    </div>

                    <div class="p-4 rounded-lg sm:p-6 bg-zinc-100 dark:bg-zinc-900">
                        <a href="https://github.com/tailwindlabs/tailwindcss-forms"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Forms') }}
                        </a>
                    </div>
                </div>
            </x-slot>
        </x-app-card>
    </div>
</div>
