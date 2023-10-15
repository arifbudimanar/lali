<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' =>
            'inline-block rounded-md bg-white dark:bg-zinc-800 px-3 py-2 text-sm font-semibold dark:text-white hover:bg-zinc-100 dark:hover:bg-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
    ]) }}>
    {{ $slot }}
</button>
