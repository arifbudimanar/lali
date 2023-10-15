@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $type = 'bg-zinc-100 dark:bg-zinc-900 text-zinc-700 dark:text-zinc-300';
            break;
        case 'danger':
            $type = 'bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-300';
            break;
        case 'warning':
            $type = 'bg-orange-100 dark:bg-orange-900 text-orange-700 dark:text-orange-300';
            break;
        case 'success':
            $type = 'bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300';
            break;
    }
@endphp

<div class="{{ $type }}">
    <div class="px-4 py-2 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        {{ $slot }}
    </div>
</div>
