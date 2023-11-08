<thead
    {{ $attributes->merge([
        'class' => 'text-zinc-600 uppercase bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-400',
    ]) }}>
    <tr>
        {{ $slot }}
    </tr>
</thead>
