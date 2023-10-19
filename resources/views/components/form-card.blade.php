@props(['submit', 'maxWidth' => '7xl', 'formWidth' => 'lg'])

@php
    switch ($maxWidth) {
        case '7xl':
            $maxWidth = 'max-w-7xl';
            break;
        case 'full':
            $maxWidth = 'w-full';
            break;
    }
    switch ($formWidth) {
        case 'lg':
            $formWidth = 'max-w-lg';
            break;
        case '3xl':
            $formWidth = 'max-w-3xl';
            break;
        case '7xl':
            $formWidth = 'max-w-7xl';
            break;
        case 'full':
            $formWidth = 'w-full';
            break;
    }
@endphp

<div class="mx-auto {{ $maxWidth }} sm:px-6 lg:px-8">
    <div class="p-4 overflow-hidden bg-white dark:bg-zinc-800 sm:rounded-lg sm:p-6 lg:p-8">
        <h3 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">{{ $title }}</h3>

        @if (isset($description))
            <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400 sm:{{ $maxWidth }}">
                {{ $description }}
            </p>
        @endif

        <form wire:submit="{{ $submit }}" class="{{ $formWidth }} mt-4 text-sm space-y-4">
            {{ $form }}

            @if (isset($actions))
                <div class="flex items-center space-x-2 bg-white dark:bg-zinc-800">
                    {{ $actions }}
                </div>
            @endif
        </form>

        @if (isset($content))
            <div class="{{ $maxWidth }} mt-4 text-sm space-y-4">
                {{ $content }}
            </div>
        @endif
    </div>
</div>
