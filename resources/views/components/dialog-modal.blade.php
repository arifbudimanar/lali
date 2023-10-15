@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="p-4 sm:p-6 lg:p-8">
        <div class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
            {{ $content }}
        </div>

        <div class="flex flex-row mt-4 text-right">
            {{ $footer }}
        </div>
    </div>

</x-modal>
