@props([
    'maxWidth' => '7xl',
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
    <div class="p-4 overflow-hidden bg-white dark:bg-gray-800 sm:rounded-lg sm:p-6 lg:p-8">
        <div class="lg:flex lg:items-start lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ $title }}
                </h2>

                @if (isset($description))
                    <div class="flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 sm:max-w-lg">
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
            <div class="gap-4 mt-4 space-y-4 text-gray-600 dark:text-gray-400">
                {{ $content }}
            </div>
        @endif
    </div>
</div>
