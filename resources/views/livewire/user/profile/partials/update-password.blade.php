<x-form-card submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        {{-- Current Password --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="currentPassword" value="{{ __('Current Password') }}" />
            <x-text-input id="currentPassword" type="password" class="block w-full mt-1" wire:model="currentPassword"
                required autocomplete="currentPassword" />
            <x-input-error for="currentPassword" class="mt-2" />
        </div>

        {{-- New Password --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="newPassword" value="{{ __('New Password') }}" />
            <x-text-input id="newPassword" type="password" class="block w-full mt-1" wire:model="newPassword" required
                autocomplete="newPassword" />
            <x-input-error for="newPassword" class="mt-2" />
        </div>

        {{-- New Password Confirmation --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="newPasswordConfirmation" value="{{ __('New Password Confirmation') }}" />
            <x-text-input id="newPasswordConfirmation" type="password" class="block w-full mt-1"
                wire:model="newPasswordConfirmation" required autocomplete="name" />
            <x-input-error for="newPasswordConfirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>

        <x-action-message class="ml-3" on="updated">
            {{ __('Updated.') }}
        </x-action-message>
    </x-slot>
</x-form-card>
