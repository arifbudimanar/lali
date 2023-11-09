<div>
    <x-auth-card title="{{ __('Register') }}">
        <form wire:submit="register">
            {{-- Name --}}
            <div>
                <x-label for="name" value="{{ __('Name') }}" required />
                <x-text-input id="name" class="block w-full mt-1" type="text" wire:model="name" required
                    name="name" :value="old('name')" autofocus autocomplete="name" placeholder="{{ __('Full Name') }}" />
                <x-input-error for="name" class="mt-2" />
            </div>

            {{-- Email --}}
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" required />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" required
                    name="email" :value="old('email')" autocomplete="email" placeholder="{{ __('example@mail.com') }}" />
                <p class ="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                    {{ __('Please use a valid email address.') }}
                </p>
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" required />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password" required
                    name="password" autocomplete="password" placeholder="••••••••" />
                <x-input-error for="password" class="mt-2" />
            </div>

            {{-- Password confirmation --}}
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" required />
                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                    wire:model="password_confirmation" required name="password_confirmation" autocomplete="password"
                    placeholder="••••••••" />
                <x-input-error for="password_confirmation" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox required name="terms" id="terms"
                            wire:model="terms_of_service_and_privacy_policy" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('termsofservice') .
                                    '" class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800">' .
                                    __('Terms of Service') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('privacypolicy') .
                                    '" class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}
                        </div>
                    </div>
                    <x-input-error for="terms_of_service_and_privacy_policy" class="mt-2" />
                </x-label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <a class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800"
                        wire:navigate href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <x-button wire:loading.attr="disabled">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>
