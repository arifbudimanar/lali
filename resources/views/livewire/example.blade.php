<div>
    {{-- Optional --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Example with Main Layout') }}
        </h2>
    </x-slot>

    {{-- Optional --}}
    <x-slot name="actions">
        {{-- You can use button link component or other component --}}
        <x-button-link href="#">
            {{ __('Header Actions') }}
        </x-button-link>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card>
            {{-- Optional --}}
            <x-slot name="actions">
                {{-- You can use button link component or other component --}}
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot>

            {{-- Required --}}
            <x-slot name="title">
                {{ __('1. App Card with default maxWidth = 7xl') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="description">
                {{ __('This is default width for description card. Used for simple description of your card. Or just leave it empty. Because description card is optional.') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="content">
                <div>
                    {{ __('Card have default width max-w-7xl. The option is max-w-7xl, w-full, or you can add another class in the app-card component.') }}
                </div>
                <div>
                    {{ __('Card Actions are optional. Or you can use Header Action. Its your preferences.') }}
                </div>
                <div>
                    {{ __('Content Card also optional.') }}
                </div>
            </x-slot>
        </x-app-card>

        <x-app-card maxWidth="full">
            {{-- Optional --}}
            <x-slot name="actions">
                {{-- You can use button link component or other component --}}
                <x-button-link href="#">
                    {{ __('Card Actions') }}
                </x-button-link>
            </x-slot>

            {{-- Required --}}
            <x-slot name="title">
                {{ __('2. App Card with maxWidth = full') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="description">
                {{ __('Full width card description.') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="content">
                {{ __('This card use width w-full, so it will be as wide as posible. You can overide the default max width with maxWidth="full".') }}
            </x-slot>
        </x-app-card>

        <x-form-card submit="updateLanguage" formWidth="lg">
            <x-slot name="title">
                {{ __('1. Form Card with default maxWidth = 7xl and default formWidth = lg') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" formWidth="full">
            <x-slot name="title">
                {{ __('2. Form Card with default maxWidth = 7xl and formWidth = full') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" formWidth="7xl">
            <x-slot name="title">
                {{ __('3.Form Card with default maxWidth = 7xl and formWidth = 7xl') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" formWidth="3xl">
            <x-slot name="title">
                {{ __('4. Form Card with default maxWidth = 7xl and formWidth = 3xl') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" maxWidth="full" formWidth="lg">
            <x-slot name="title">
                {{ __('1. Form Card with maxWidth = full and default formWidth = lg') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" maxWidth="full" formWidth="full">
            <x-slot name="title">
                {{ __('2. Form Card with maxWidth = full and formWidth = full') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" maxWidth="full" formWidth="7xl">
            <x-slot name="title">
                {{ __('3.Form Card with maxWidth = full and formWidth = 7xl') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>

        <x-form-card submit="updateLanguage" maxWidth="full" formWidth="3xl">
            <x-slot name="title">
                {{ __('4. Form Card with maxWidth = full and formWidth = 3xl') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Form Card Description') }}
            </x-slot>

            <x-slot name="form">
                <div>
                    <x-label for="name" value="{{ __('Input Label') }}" />

                    <x-text-input id="name" type="text" class="block w-full mt-1" wire:model="name" required
                        autocomplete="name" placeholder="Text Input" />

                    <x-input-error for="name" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <x-button wire:loading.attr="disabled">
                    {{ __('Primary Button') }}
                </x-button>
                <x-secondary-button wire:loading.attr="disabled">
                    {{ __('Secondary Button') }}
                </x-secondary-button>

                <x-session-message class="ml-3" session="languageUpdated" />

                <x-action-message class="ml-3" on="nothingChanged">
                    {{ __('Nothing changed.') }}
                </x-action-message>
            </x-slot>
        </x-form-card>
    </div>
</div>
