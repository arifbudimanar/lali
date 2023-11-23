@props([
    'maxWidth' => 'md',
    'title',
])

@php
    $maxWidthClasses = match ($maxWidth) {
        'md' => 'sm:max-w-md',
        'xl' => 'sm:max-w-xl lg:max-w-2xl',
        default => $maxWidth,
    };
@endphp

<div
    {{ $attributes->merge([
        'class' => 'flex flex-col items-center min-h-screen py-6 sm:justify-center',
    ]) }}>
    <x-logo />

    @isset($title)
        <div class="w-full {{ $maxWidthClasses }}">
            <h1 class="text-4xl font-bold text-center">{{ $title }}</h1>
        </div>
    @endisset

    <div
        class="{{ $maxWidthClasses }} w-full mt-6 px-6 text-sm py-4 bg-white dark:bg-zinc-800 overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
