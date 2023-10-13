@props(['active'])

@php
    $classes = $active ?? false ? 'block px-3 py-2 text-sm font-medium text-gray-700 dark:text-white bg-gray-100 dark:bg-gray-900 rounded-md' : 'block px-3 py-2 text-sm font-medium text-gray-500 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 hover:text-gray-700 dark:hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
