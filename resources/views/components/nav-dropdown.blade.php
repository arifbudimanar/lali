@props(['active', 'title'])

@php
    $classes = $active ?? false ? 'block px-3 py-2 text-sm font-medium text-zinc-700 flex items-center justify-between w-full dark:text-zinc-100 bg-zinc-100 dark:bg-zinc-900 rounded-md' : 'block px-3 py-2 flex items-center justify-between w-full text-sm font-medium text-zinc-700 dark:text-zinc-100 rounded-md hover:bg-zinc-100 dark:hover:bg-zinc-900 hover:text-zinc-700 dark:hover:text-white';
@endphp

<div class="flex flex-col gap-1" x-data="{ open: {{ $active ? 'true' : 'false' }} }">
    <button {{ $attributes->merge(['class' => $classes]) }} @click="open=!open">
        {{ $title }}

        <span>
            <x-icon-arrow-down x-show="!open" class="w-4 h-4" />

            <x-icon-arrow-up x-show="open" style="display: none;" class="w-4 h-4" />
        </span>
    </button>

    <div class="flex flex-col gap-1 ml-4 lg:relative" style="display: none;" x-show="open"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
        {{ $slot }}
    </div>
</div>
