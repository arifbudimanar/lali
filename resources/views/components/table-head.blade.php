<thead
    {{ $attributes->merge([
        'class' => 'text-xs text-zinc-700 uppercase bg-zinc-100 dark:bg-zinc-700 dark:text-zinc-400',
    ]) }}>
    <tr>
        {{ $slot }}
    </tr>
</thead>
