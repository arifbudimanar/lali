<div>
    {{-- Optional --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('App Header Title') }}
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
                {{ __('Card Title') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="description">
                {{ __('Card Description.') }}
            </x-slot>

            {{-- Optional --}}
            <x-slot name="content">
                {{ __('Card Content') }}
            </x-slot>
        </x-app-card>
    </div>
</div>
