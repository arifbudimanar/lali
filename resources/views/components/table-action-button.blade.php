@props(['type' => 'info'])

@php
    $typeClasses = match ($type) {
        'info' => 'text-zinc-600 dark:text-zinc-400',
        'danger' => 'text-red-600 dark:text-red-400',
        'warning' => 'text-yellow-600 dark:text-yellow-400',
        'success' => 'text-indigo-600 dark:text-indigo-400',
        default => $type,
    };
@endphp

<button {{ $attributes->merge([
    'class' => 'font-medium hover:underline ' . $typeClasses,
]) }}>
    {{ $slot }}
</button>
