<x-form-card submit="updateProfile">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        {{-- Name --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required autofocus
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        {{-- Email --}}
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                autocomplete="email" />
            <x-input-error for="email" class="mt-2" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="mt-2 text-sm dark:text-white">
                        {{ __('Your email address is unverified.') }}

                        <button type="button"
                            class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            wire:click="sendEmailVerification" wire:loading.attr="disabled">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('resent'))
                        <p class="mt-2 text-sm font-medium text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>

        <x-action-message class="ml-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-action-message class="ml-3" on="nothingChanged">
            {{ __('Nothing Changed.') }}
        </x-action-message>
    </x-slot>
</x-form-card>
