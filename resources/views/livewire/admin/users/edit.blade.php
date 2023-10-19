<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            <a wire:navigate href="{{ route('admin.users.index') }}" class="hover:underline">
                {{ __('Users') }}
            </a>
            /
            <a wire:navigate href="{{ route('admin.users.show', $user) }}" class="hover:underline">
                {{ $user->name }}
            </a>
            /
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-form-card submit="updateUser" maxWidth="full">
            <x-slot name="title">
                {{ __('Edit User') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Edit user information.') }}
            </x-slot>

            <x-slot name="form">
                {{-- Name --}}
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autofocus autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                {{-- Email --}}
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-text-input id="email" type="text" class="block w-full mt-1" wire:model="email" required
                        autocomplete="email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>

                <x-secondary-button wire:click="cancelEdit" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-form-card>
    </div>
</div>
