<x-form-card submit="updateProfile" title="{{ __('Profile Information') }}"
    description="{{ __('Update your account\'s profile information and email address.') }}">
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
                            class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800"
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
    </x-slot>
</x-form-card>
