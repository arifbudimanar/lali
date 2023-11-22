@props(['type' => 'info'])

@php
    $typeClasses = match ($type) {
        'info' => 'bg-zinc-100 dark:bg-zinc-900 text-zinc-700 dark:text-zinc-300',
        'danger' => 'bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-300',
        'warning' => 'bg-orange-100 dark:bg-orange-900 text-orange-700 dark:text-orange-300',
        'success' => 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300',
        default => $type,
    };
@endphp

<div class="{{ $typeClasses }}">
    <div class="px-4 py-2 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        {{ $slot }}
    </div>
</div>
