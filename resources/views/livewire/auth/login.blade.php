<div>
    <x-auth-card>
        <x-slot name="title">
            {{ __('Log in') }}
        </x-slot>

        <form wire:submit="login">
            {{-- Email --}}
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password"
                    name="password" required autocomplete="current-password" />
            </div>

            {{-- Remember me --}}
            <div class="mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" wire:model="remember" />
                    <span class="ml-2 text-sm text-zinc-600 dark:text-zinc-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <a class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800"
                        wire:navigate href="{{ route('register') }}">
                        {{ __('Not register yet?') }}
                    </a>
                    @if (Route::has('password.request'))
                        <a class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800"
                            wire:navigate href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-button wire:loading.attr="disabled">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>
