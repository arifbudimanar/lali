@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $colorClasses = 'text-indigo-600 dark:text-indigo-400';
            break;
        case 'danger':
            $colorClasses = 'text-red-600 dark:text-red-400';
            break;
        case 'warning':
            $colorClasses = 'text-orange-600 dark:text-orange-400';
            break;
        case 'success':
            $colorClasses = 'text-green-600 dark:text-green-400';
            break;
    }
@endphp

<button {{ $attributes->merge([
    'class' => 'font-medium ' . $colorClasses . ' hover:underline',
]) }}>
    {{ $slot }}
</button>
