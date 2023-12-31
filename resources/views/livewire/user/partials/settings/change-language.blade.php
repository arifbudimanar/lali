<x-form-card submit="updateLanguage" title=" {{ __('Change Language') }}"
    description="{{ __('Update your browser language.') }}">
    <x-slot:form>
        {{-- Language --}}
        <div>
            <x-label for="language" value="{{ __('Select Language') }}" required />
            <x-select-input wire:model="language" id="language" name="language" class="block w-full mt-1">
                @foreach ($supported_languages as $translation)
                    <option value="{{ $translation['code'] }}">
                        {{ $translation['name'][$current_language] ?? $translation['name'][config('app.fallback_locale')] }}
                    </option>
                @endforeach
            </x-select-input>
            <x-input-error for="language" class="mt-2" />
        </div>
    </x-slot:form>

    <x-slot:actions>
        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>
    </x-slot:actions>
</x-form-card>
