@props([
    'maxWidth' => '7xl',
    'title',
    'description',
])
@php
    switch ($maxWidth) {
        case '7xl':
            $maxWidth = 'max-w-7xl';
            break;
        case 'full':
            $maxWidth = 'w-full';
            break;
    }
@endphp

<div class="mx-auto {{ $maxWidth }} sm:px-6 lg:px-8">
    <div class="p-4 overflow-hidden bg-white dark:bg-zinc-800 sm:rounded-lg sm:p-6 lg:p-8">
        <div class="lg:flex lg:items-start lg:justify-between">
            <div class="flex-1 min-w-0">
                @if (isset($title))
                    <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
                        {{ $title }}
                    </h2>
                @endif

                @if (isset($description))
                    <div class="flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400 sm:max-w-lg">
                            {{ $description }}
                        </p>
                    </div>
                @endif
            </div>

            @if (isset($actions))
                <div class="inline-flex gap-2 mt-4 shrink-0 lg:ml-3 lg:mt-0">
                    {{ $actions }}
                </div>
            @endif
        </div>

        @if (isset($content))
            <div
                class="gap-4 {{ isset($title) || isset($description) || isset($actions) ? 'mt-4' : '' }} text-sm text-zinc-600 dark:text-zinc-400">
                {{ $content }}
            </div>
        @endif
    </div>
</div>
