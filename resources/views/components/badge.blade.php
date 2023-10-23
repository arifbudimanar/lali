@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $type = 'text-zinc-600 bg-zinc-200 dark:text-zinc-200 dark:bg-zinc-600';
            break;
        case 'danger':
            $type = 'text-red-700 bg-red-200 dark:text-red-200 dark:bg-red-700';
            break;
        case 'warning':
            $type = 'text-orange-700 bg-orange-200 dark:text-orange-200 dark:bg-orange-700';
            break;
        case 'success':
            $type = 'text-indigo-700 bg-indigo-200 dark:text-indigo-200 dark:bg-indigo-700';
            break;
    }
@endphp

<span class="px-2 py-1 text-xs font-semibold leading-tight rounded-full {{ $type }}">
    {{ $slot }}
</span>
