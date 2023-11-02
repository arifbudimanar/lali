@props(['title', 'stats'])

<div class="flex flex-col justify-between w-full p-5 rounded-lg bg-zinc-100 dark:bg-zinc-700">
    <h3 class="text-base font-medium text-zinc-700 dark:text-zinc-300">{{ $title }}</h3>
    <p class="mt-1 text-2xl font-bold sm:mt-2 text-zinc-900 dark:text-zinc-100">{{ $stats }}</p>
</div>
