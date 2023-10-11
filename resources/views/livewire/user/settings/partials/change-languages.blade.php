<x-form-card submit="updateLanguage">
    <x-slot name="title">
        {{ __('Change Languages') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your browser language.') }}
    </x-slot>

    <x-slot name="form">
        {{-- Language --}}
        <div class="col-span-6 sm:col-span-4">
            <x-select-input wire:model="selectedLanguage" id="language" name="language" class="block w-full mt-1">
                @foreach ($supportedLanguages as $code => $name)
                    <option value="{{ $code }}">{{ $name }}</option>
                @endforeach
            </x-select-input>

            <x-input-error for="selectedLanguage" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>

        <x-session-message class="ml-3" session="languageUpdated" />

        <x-action-message class="ml-3" on="nothingChanged">
            {{ __('Nothing Changed.') }}
        </x-action-message>
    </x-slot>
</x-form-card>
