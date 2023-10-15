@props([
    'maxWidth' => 'default',
])
@php
    switch ($maxWidth) {
        case 'default':
            $maxWidth = 'sm:max-w-md';
            break;
        case 'xl':
            $maxWidth = 'sm:max-w-xl lg:max-w-2xl';
            break;
    }
@endphp
<div class="flex flex-col items-center min-h-screen py-6 sm:justify-center">
    <div>
        {{ $logo }}
    </div>

    @isset($title)
        <div class="w-full sm:max-w-md">
            <h1 class="text-4xl font-bold text-center">{{ $title }}</h1>
        </div>
    @endisset

    <div class="{{ $maxWidth }} w-full mt-6 px-6 py-4 bg-white dark:bg-zinc-800 overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
