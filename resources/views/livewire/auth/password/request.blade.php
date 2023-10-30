<div>
    <x-auth-card title="{{ __('Request Password Reset') }}">
        <div class="mb-4 text-zinc-600 dark:text-zinc-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <form wire:submit="sendResetPasswordLink">
            {{-- Email --}}
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-button wire:loading.attr="disabled">
                    {{ __('Send Password Reset Link') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</div>
