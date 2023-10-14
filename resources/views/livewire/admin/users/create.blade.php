<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            <a wire:navigate href="{{ route('admin.users.index') }}" class="hover:underline">
                {{ __('Users') }}
            </a>
            /
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-form-card submit="createUser" maxWidth="full">
            <x-slot name="title">
                {{ __('Create User') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Create new user.') }}
            </x-slot>

            <x-slot name="form">
                {{-- Name --}}
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autofocus autocomplete="name" placeholder="{{ __('Full Name') }}" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                {{-- Email --}}
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                        autocomplete="email" placeholder="{{ __('Email') }}" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>

                <x-secondary-button wire:click="cancelCreate">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-action-message class="ml-3" on="userCreated">
                    {{ __('Saved.') }}
                </x-action-message>

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing Changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>
    </div>
</div>
