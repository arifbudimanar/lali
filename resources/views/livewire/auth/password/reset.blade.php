<div>
    <x-auth-card>
        <x-slot name="logo">
            <a wire:navigate href="{{ route('home') }}" class="font-bold text-md">
                {{ config('app.name', 'Laravel') }}
            </a>
        </x-slot>

        <x-slot name="title">
            {{ __('Password Reset') }}
        </x-slot>

        <form wire:submit="resetPassword">
            {{-- Email --}}
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    required autofocus autocomplete="email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password"
                    name="password" required autocomplete="new-password" />
                <x-input-error for="password" class="mt-2" />
            </div>

            {{-- Password Confirmation --}}
            <div class="mt-4">
                <x-label for="passwordConfirmation" value="{{ __('Password Confirmation') }}" />
                <x-text-input id="passwordConfirmation" class="block w-full mt-1" type="password"
                    wire:model="passwordConfirmation" name="passwordConfirmation" required
                    autocomplete="new-password" />
                <x-input-error for="passwordConfirmation" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-button wire:loading.attr="disabled">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>
