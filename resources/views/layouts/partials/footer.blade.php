<footer class="w-full bg-white dark:bg-zinc-800">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="p-4 overflow-hidden bg-white dark:bg-zinc-800 sm:rounded-lg sm:p-6 lg:p-8">
            <div class="xl:grid xl:grid-cols-2 xl:gap-8">
                {{-- Logo --}}
                <div class="text-white xl:col-span-1">
                    <x-logo />
                    <p class="w-1/2 mt-2 text-sm text-gray-500">
                        {{ __('A powerful foundation for building web applications with the TALL stack.') }}</p>
                </div>

                <div class="grid grid-cols-2 gap-6 mt-12 xl:mt-0 sm:grid-cols-3">
                    {{-- Navigation --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-500">{{ __('Navigation') }}</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="{{ route('home') }}" wire:navigate
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Home') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.dashboard') }}" wire:navigate
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Your Dashboard') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.dashboard') }}" wire:navigate
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Admin Dashboard') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Legal --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-500">{{ __('Legal') }}</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="https://github.com/arifbudimanar/lali/blob/main/LICENSE" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">
                                    {{ __('License') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacypolicy') }}" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">
                                    {{ __('Privacy Policy') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('termsofservice') }}" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">
                                    {{ __('Terms Of Service') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Socials --}}
                    <div>
                        <h3 class="text-sm font-bold tracking-wider uppercase text-zinc-500">{{ __('Socials') }}</h3>
                        <ul role="list" class="mt-4 space-y-2">
                            <li>
                                <a href="https://arifbudimanar.github.io/" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Portofolio') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/arifbudimanar" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Github') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/arifbudiman_id" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Twitter') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/arifbudimanarrosyid/" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Instagram') }}
                                </a>
                            </li>
                            <li>
                                <a href="https://www.threads.net/@arifbudimanarrosyid" target="_blank"
                                    class="text-sm text-gray-500 hover:text-indigo-600">{{ __('Threads') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Watermark --}}
            <div class="flex flex-wrap items-baseline mt-12">
                <span class="mt-2 text-sm text-gray-500">
                    Copyright © 2023 - 2024
                    <a href="https://arifbudimanar.github.io/" class="mx-2 text-wickedblue hover:text-gray-500"
                        rel="noopener noreferrer">
                        @arifbudimanar
                    </a>
                    . Since 2023
                </span>
            </div>
        </div>
    </div>
</footer>
