{{-- Only use this component on admin nav only, because
main and app navigation should should be enough with
just nav-link or responsive nav-link --}}

@props(['active', 'name'])

@php
    $classes = $active ?? false ? 'block px-3 py-2 text-base font-medium text-gray-700 flex items-center justify-between w-full dark:text-white bg-gray-100 dark:bg-gray-900 rounded-md' : 'block px-3 py-2 flex items-center justify-between w-full text-base font-medium text-gray-500 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 hover:text-gray-700 dark:hover:text-white';
@endphp

<div class="flex flex-col gap-1" x-data="{ open: false }">
    <button {{ $attributes->merge(['class' => $classes]) }} @click="open=!open">
        {{ $name }}
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" x-show="!open" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" x-show="open" style="display: none;" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </span>
    </button>

    <div class="flex flex-col gap-1 ml-3 lg:ml-4 lg:relative" style="display: none;" x-show="open">
        {{ $slot }}
    </div>
</div>
