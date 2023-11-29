<footer class="w-full bg-white dark:bg-zinc-800">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-4 overflow-hidden bg-white dark:bg-zinc-800 sm:rounded-lg sm:p-6 lg:p-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-6">
                {{-- Logo --}}
                <div>
                    <x-logo />
                    <p class="mt-3 text-sm text-zinc-600 dark:text-zinc-400">
                        {{ __('The skeleton application for the Laravel starter project with TALL Stack.') }}
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-6 mt-12 xl:col-span-2 xl:mt-0 md:grid-cols-3 xl:grid-cols-4">
                    {{-- Navigations --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-900 dark:text-zinc-100">
                            {{ __('Navigations') }}
                        </h3>

                        <ul role="list" class="mt-4 space-y-2">
                            @guest
                                <li>
                                    <a href="{{ route('login') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Login') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Register') }}
                                    </a>
                                </li>
                            @endguest
                            <li>
                                <a href="{{ route('home') }}" wire:navigate
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Home') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('example') }}" wire:navigate
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Example') }}
                                </a>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('user.dashboard') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('User Dashboard') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.profile') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('User Profile') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.settings') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('User Settings') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.dashboard') }}" wire:navigate
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('User Example') }}
                                    </a>
                                </li>
                                @if (session()->has('auth.password_confirmed_at'))
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}" wire:navigate
                                            class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Admin Dashboard') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.users.index') }}" wire:navigate
                                            class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Admin User') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.example') }}" wire:navigate
                                            class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Admin Example') }}
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>

                    {{-- Legals --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-900 dark:text-zinc-100">
                            {{ __('Legals') }}
                        </h3>

                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="https://github.com/arifbudimanar/lali/blob/main/LICENSE" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">
                                    {{ __('License') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacypolicy') }}" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">
                                    {{ __('Privacy Policy') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('termsofservice') }}" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">
                                    {{ __('Terms of Service') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Socials --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-900 dark:text-zinc-100">
                            {{ __('Socials') }}
                        </h3>

                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="https://arifbudimanar.github.io/" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Portofolio') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/arifbudimanar" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Github') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/arifbudiman_id" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Twitter') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://www.threads.net/@arifbudimanarrosyid" target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">{{ __('Threads') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Others --}}
                    <div class="md:col-span-3 xl:col-span-1">
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-900 dark:text-zinc-100">
                            {{ __('Others') }}
                        </h3>

                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="https://marketplace.visualstudio.com/items?itemName=arifbudimanar.arifcode-theme"
                                    target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">
                                    {{ __('ArifCode - VSCode Theme') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://marketplace.visualstudio.com/items?itemName=arifbudimanar.better-laravel-extension-pack"
                                    target="_blank"
                                    class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-indigo-600">
                                    {{ __('Better Laravel Extension Pack - VSCode Extensions') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Watermark --}}
            <div class="flex flex-wrap items-baseline mt-12 xl:justify-center">
                <span class="text-sm text-zinc-600 dark:text-zinc-400">
                    Copyright © 2023
                    <a href="https://arifbudimanar.github.io/" class="hover:text-indigo-600" rel="noopener noreferrer">
                        Arif Budiman Arrosyid
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>
