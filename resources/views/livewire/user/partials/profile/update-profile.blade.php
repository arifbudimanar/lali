<x-form-card submit="updateProfile" title="{{ __('Profile Information') }}"
    description="{{ __('Update your profile information with valid data.') }}">
    <x-slot:form>
        {{-- Name --}}
        <div>
            <x-label for="name" value="{{ __('Name') }}" required />
            <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required autofocus
                autocomplete="name" placeholder="{{ __('Full Name') }}" />
            <x-input-error for="name" class="mt-2" />
        </div>

        {{-- Email --}}
        <div>
            <x-label for="email" value="{{ __('Email') }}" required />
            <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                autocomplete="email" placeholder="{{ __('example@mail.com') }}" />
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
    </x-slot:form>

    <x-slot:actions>
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>
    </x-slot:actions>
</x-form-card>
