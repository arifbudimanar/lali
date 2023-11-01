<a
    {{ $attributes->merge([
        'class' => 'inline-block rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500',
    ]) }}>
    {{ $slot }}
</a>
