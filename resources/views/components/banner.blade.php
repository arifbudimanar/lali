@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $type = 'bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-100';
            break;
        case 'danger':
            $type = 'bg-red-200 dark:bg-red-700 text-red-600 dark:text-red-100';
            break;
        case 'warning':
            $type = 'bg-orange-200 dark:bg-orange-700 text-orange-600 dark:text-orange-100';
            break;
        case 'success':
            $type = 'bg-indigo-200 dark:bg-indigo-700 text-indigo-600 dark:text-indigo-100';
            break;
    }
@endphp

<div class="{{ $type }}">
    <div class="px-4 py-2 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        {{ $slot }}
    </div>
</div>
