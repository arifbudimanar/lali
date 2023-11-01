<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-block rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500',
    ]) }}>
    {{ $slot }}
</button>
