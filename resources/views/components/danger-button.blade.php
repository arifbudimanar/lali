<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' =>
            'inline-flex items-center justify-center px-3 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-red-500 transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
