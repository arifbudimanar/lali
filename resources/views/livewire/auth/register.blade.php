<div>
    <x-auth-card>
        <x-slot name="logo">
            <a wire:navigate href="{{ route('home') }}" class="font-bold text-md">
                {{ config('app.name', 'Laravel') }}
            </a>
        </x-slot>

        <x-slot name="title">
            {{ __('Register') }}
        </x-slot>

        <form wire:submit="register">
            {{-- Name --}}
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-text-input id="name" class="block w-full mt-1" type="text" wire:model="name" name="name"
                    :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            {{-- Email --}}
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    :value="old('email')" required autocomplete="email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password"
                    name="password" required autocomplete="password" />
                <x-input-error for="password" class="mt-2" />
            </div>

            {{-- Password Confirmation --}}
            <div class="mt-4">
                <x-label for="passwordConfirmation" value="{{ __('Confirm Password') }}" />
                <x-text-input id="passwordConfirmation" class="block w-full mt-1" type="password"
                    wire:model="passwordConfirmation" name="passwordConfirmation" required
                    autocomplete="new-password" />
                <x-input-error for="passwordConfirmation" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" wire:model="acceptTermsAndPrivacy" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('termsofservice') .
                                    '" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                    __('Terms of Service') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('privacypolicy') .
                                    '" class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}
                        </div>
                    </div>
                    <x-input-error for="acceptTermsAndPrivacy" class="mt-2" />
                </x-label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex flex-col">
                    <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
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
