@props(['title', 'stats'])

<div class="flex flex-col justify-between w-full gap-1 p-4 rounded-lg sm:p-6 sm:gap-2 bg-zinc-100 dark:bg-zinc-900">
    <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">
        {{ $title }}
    </h3>

    <p class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">
        {{ $stats }}
    </p>
</div>
