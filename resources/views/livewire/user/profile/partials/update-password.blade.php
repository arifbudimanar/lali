<x-form-card submit="updatePassword" title="{{ __('Update Password') }}"
    description="{{ __('Ensure your account is using a long, random password to stay secure.') }}">
    <x-slot name="form">
        {{-- Current Password --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-text-input id="current_password" type="password" class="block w-full mt-1" wire:model="current_password"
                required autocomplete="current_password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        {{-- New Password --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="new_password" value="{{ __('New Password') }}" />
            <x-text-input id="new_password" type="password" class="block w-full mt-1" wire:model="new_password" required
                autocomplete="new_password" />
            <x-input-error for="new_password" class="mt-2" />
        </div>

        {{-- New Password Confirmation --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="new_password_confirmation" value="{{ __('New Password Confirmation') }}" />
            <x-text-input id="new_password_confirmation" type="password" class="block w-full mt-1"
                wire:model="new_password_confirmation" required autocomplete="new_password_confirmation" />
            <x-input-error for="new_password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-card>
