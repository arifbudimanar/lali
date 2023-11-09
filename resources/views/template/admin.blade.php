{{--
Dont forget add #[Layout('layouts.admin')] to the top of
the function render() in the Livewire component.
--}}

<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Admin Header Title') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <x-button-link href="#">
            {{ __('Header Actions') }}
        </x-button-link>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full" title="{{ __('Card Title') }}" description="{{ __('Card description.') }}">
            <x-slot name="actions">
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot>

            <x-slot name="content">
                {{ __('Card Content') }}
            </x-slot>
        </x-app-card>

        <x-app-card maxWidth="full">
            <x-slot name="actions">
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot>

            <x-slot name="title">
                {{ __('Card Title') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Card description.') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Card Content') }}
            </x-slot>
        </x-app-card>

        <x-form-card submit="submitFunction" maxWidth="full" formWidth="lg" title="{{ __('Card Title') }}"
            description="{{ __('Card description.') }}">
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
                    <x-input-error for="email" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Submit') }}
                </x-button>

                <x-secondary-button wire:click="cancelFunction" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-form-card>
    </div>
</div>
