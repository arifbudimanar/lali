<tr
    {{ $attributes->merge([
        'class' => 'odd:bg-white odd:dark:bg-zinc-800 even:bg-zinc-100 even:dark:bg-zinc-900',
    ]) }}>
    {{ $slot }}
</tr>
