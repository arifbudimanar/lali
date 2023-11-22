{{--
No need to add #[Layout('layouts.app')] to the top of
the function render() in the Livewire component.
Because the default layout is #[Layout('layouts.app')].
--}}

<div>
    <x-slot:header>
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('App Header Title') }}
        </h2>
    </x-slot:header>

    <x-slot:actions>
        <x-button-link href="#">
            {{ __('Header Actions') }}
        </x-button-link>
    </x-slot:actions>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="7xl" title="{{ __('Card Title') }}" description="{{ __('Card description.') }}">
            <x-slot:actions>
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot:actions>

            <x-slot:content>
                {{ __('Card Content') }}
            </x-slot:content>
        </x-app-card>

        <x-app-card maxWidth="7xl">
            <x-slot:actions>
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot:actions>

            <x-slot:title>
                {{ __('Card Title') }}
            </x-slot:title>

            <x-slot:description>
                {{ __('Card description.') }}
            </x-slot:description>

            <x-slot:content>
                {{ __('Card Content') }}
            </x-slot:content>
        </x-app-card>

        <x-form-card submit="submitFunction" maxWidth="7xl" formWidth="lg" title="{{ __('Card Title') }}"
            description="{{ __('Card description.') }}">
            <x-slot:form>
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
            </x-slot:form>

            <x-slot:actions>
                <x-button wire:loading.attr="disabled">
                    {{ __('Submit') }}
                </x-button>

                <x-secondary-button wire:click="cancelFunction" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot:actions>
        </x-form-card>
    </div>
</div>
