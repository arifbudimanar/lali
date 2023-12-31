<div>
    <x-slot:header>
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Home') }}
        </h2>
    </x-slot:header>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        {{-- Welcome main --}}
        <x-app-card width="full" title="{{ __('Welcome to :appname', ['appname' => config('app.name')]) }}">
            @auth
                <x-slot:description>
                    {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}
                </x-slot:description>
            @endauth
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Lali - Laravel Livewire Starter Project') }}"
            description="{{ __('The skeleton application for the Laravel starter project with TALL Stack.') }}">
            <x-slot:actions>
                <x-button-link href="https://github.com/arifbudimanar/lali" target="_blank">
                    Github
                </x-button-link>
                <x-button-link href="https://packagist.org/packages/arifbudimanar/lali" target="_blank">
                    Packagist
                </x-button-link>
            </x-slot:actions>
            <x-slot:content>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-4 sm:gap-6">
                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Styling') }}
                        </h3>

                        <a href="https://tailwindcss.com/" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Tailwind CSS') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Interactivity') }}
                        </h3>

                        <a href="https://alpinejs.dev/" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Alpine JS') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Framework') }}
                        </h3>

                        <a href="https://laravel.com/" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Reactivity') }}
                        </h3>

                        <a href="https://livewire.laravel.com/" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Livewire') }}
                        </a>
                    </div>
                </div>
                <div class="justify-between mt-4 text-sm sm:flex">
                    @env('local')
                    <div class="text-zinc-500 dark:text-zinc-400">
                        {{ __('Local environment.') }}
                    </div>
                    @endenv
                    @env('production')
                    <div class="text-zinc-500 dark:text-zinc-400">
                        {{ __('Production environment.') }}
                    </div>
                    @endenv
                    @env('staging')
                    <div class="text-zinc-500 dark:text-zinc-400">
                        {{ __('Staging environment.') }}
                    </div>
                    @endenv
                    <div class="text-zinc-500 dark:text-zinc-400">
                        Laravel {{ \Composer\InstalledVersions::getPrettyVersion('laravel/framework') }} -
                        Livewire {{ \Composer\InstalledVersions::getPrettyVersion('livewire/livewire') }} -
                        PHP v{{ PHP_VERSION }}
                    </div>
                </div>
            </x-slot:content>
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Built In Laravel Package') }}">
            <x-slot:content>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 2xl:grid-cols-3 sm:gap-6">
                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Debuger') }}
                        </h3>

                        <a href="https://github.com/barryvdh/laravel-debugbar" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel Debugbar') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('IDE Helper') }}
                        </h3>

                        <a href="https://github.com/barryvdh/laravel-ide-helper" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel IDE Helper') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Testing') }}
                        </h3>

                        <a href="https://pestphp.com/" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('PEST') }}
                        </a>
                    </div>

                    <div class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Toaster') }}
                        </h3>

                        <a href="https://github.com/masmerise/livewire-toaster" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Livewire Toaster') }}
                        </a>
                    </div>

                    <div
                        class="flex flex-col gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 sm:col-span-2 dark:bg-zinc-900">
                        <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
                            {{ __('Translation') }}
                        </h3>

                        <a href="https://github.com/Laravel-Lang/lang" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Laravel Lang') }}
                        </a>
                    </div>
                </div>
            </x-slot:content>
        </x-app-card>

        <x-app-card maxWidth="7xl" title="{{ __('Built In Tailwind Plugin') }}">
            <x-slot:content>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="p-4 rounded-lg sm:p-6 bg-zinc-100 dark:bg-zinc-900">
                        <a href="https://tailwindcss.com/docs/typography-plugin" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Typography') }}
                        </a>
                    </div>

                    <div class="p-4 rounded-lg sm:p-6 bg-zinc-100 dark:bg-zinc-900">
                        <a href="https://github.com/tailwindlabs/tailwindcss-forms" target="_blank"
                            class="text-2xl font-bold text-indigo-500 hover:underline dark:text-indigo-400">
                            {{ __('Forms') }}
                        </a>
                    </div>
                </div>
            </x-slot:content>
        </x-app-card>
    </div>
</div>
