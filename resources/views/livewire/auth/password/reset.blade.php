<div>
    <x-auth-card title="{{ __('Password Reset') }}">
        <form wire:submit="resetPassword">
            {{-- Email --}}
            <div>
                <x-label for="email" value="{{ __('Email') }}" required />
                <x-text-input id="email" class="block w-full mt-1" type="email" wire:model="email" name="email"
                    required autofocus autocomplete="email" placeholder="{{ __('example@mail.com') }}" />
                <x-input-error for="email" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" required />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password"
                    name="password" required autocomplete="new-password" placeholder="••••••••" />
                <x-input-error for="password" class="mt-2" />
            </div>

            {{-- Password confirmation --}}
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Password Confirmation') }}" required />
                <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                    wire:model="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                    placeholder="••••••••" />
                <x-input-error for="password_confirmation" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-button wire:loading.attr="disabled">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</div>
