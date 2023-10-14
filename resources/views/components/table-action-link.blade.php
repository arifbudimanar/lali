<a wire:navigate
    {{ $attributes->merge([
        'class' => 'font-medium text-indigo-600 dark:text-indigo-400 hover:underline',
    ]) }}>
    {{ $slot }}
</a>
