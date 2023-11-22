@props([
    'maxWidth' => '7xl',
    'formWidth' => 'lg',
    'submit',
    'title',
    'description',
])

@php
    $maxWidthClasses = match ($maxWidth) {
        '7xl' => 'max-w-7xl',
        'full' => 'w-full',
        default => $maxWidth,
    };

    $formWidthClasses = match ($formWidth) {
        'lg' => 'max-w-lg',
        '3xl' => 'max-w-3xl',
        '7xl' => 'max-w-7xl',
        'full' => 'w-full',
        default => $formWidth,
    };
@endphp

<div class="mx-auto {{ $maxWidthClasses }} sm:px-6 lg:px-8">
    <div class="p-4 overflow-hidden bg-white dark:bg-zinc-800 sm:rounded-lg sm:p-6 lg:p-8">
        @isset($title)
            <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">{{ $title }}</h2>
        @endisset

        @isset($description)
            <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400 sm:{{ $maxWidth }}">
                {{ $description }}
            </p>
        @endisset

        <form wire:submit="{{ $submit }}" class="{{ $formWidthClasses }} mt-4 text-sm space-y-4">
            {{ $form }}

            @isset($actions)
                <div class="flex items-center space-x-2 bg-white dark:bg-zinc-800">
                    {{ $actions }}
                </div>
            @endisset
        </form>

        @isset($content)
            <div class="{{ $maxWidth }} mt-4 text-sm">
                {{ $content }}
            </div>
        @endisset
    </div>
</div>
