<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            <a wire:navigate href="{{ route('admin.users.index') }}" class="hover:underline">
                {{ __('Users') }}
            </a>
            /
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-form-card submit="createUser" maxWidth="full" title="{{ __('Create User') }}"
            description=" {{ __('Create new user.') }}">
            <x-slot name="form">
                {{-- Name --}}
                <div>
                    <x-label for="name" value="{{ __('Name') }}" required />
                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autofocus autocomplete="name" placeholder="{{ __('Full Name') }}" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                {{-- Email --}}
                <div>
                    <x-label for="email" value="{{ __('Email') }}" required />
                    <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                        autocomplete="email" placeholder="{{ __('example@mail.com') }}" />
                    <p class ="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                        {{ __('Please use a valid email address.') }}
                    </p>
                    <x-input-error for="email" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>

                <x-secondary-button wire:click="cancelCreate" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-form-card>
    </div>
</div>
