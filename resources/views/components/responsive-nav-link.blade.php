@props(['active'])

@php
    $classes = $active ?? false ? 'block px-3 py-2 text-sm font-medium text-zinc-700 dark:text-white bg-zinc-100 dark:bg-zinc-900 rounded-md' : 'block px-3 py-2 text-sm font-medium text-zinc-500 dark:text-zinc-300 rounded-md hover:bg-zinc-100 dark:hover:bg-zinc-900 hover:text-zinc-700 dark:hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
