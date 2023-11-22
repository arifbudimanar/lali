@props([
    'align' => 'right',
    'width' => '48',
])

@php
    $alignmentClasses = match ($align) {
        'left' => 'origin-top-left left-0',
        'right' => 'origin-top-right right-0',
        'center' => 'origin-top',
        'top' => 'origin-top',
        'none', 'false' => '',
        default => $align,
    };

    $widthClasses = match ($width) {
        '48' => 'w-48',
        'auto' => 'min-w-max',
        default => $width,
    };
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-50 mt-2 {{ $widthClasses }} rounded-md {{ $alignmentClasses }}" style="display: none;"
        @click="open = false">
        <div class="py-1 bg-white rounded-md ring-1 ring-black ring-opacity-5 dark:bg-zinc-700">
            {{ $content }}
        </div>
    </div>
</div>
