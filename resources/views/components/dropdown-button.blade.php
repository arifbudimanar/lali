<button type="button"
    {{ $attributes->merge([
        'class' =>
            'w-full flex items-center px-4 py-2 text-left text-sm leading-5 text-zinc-700 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 focus:outline-none focus:bg-zinc-100 dark:focus:bg-zinc-800 transition duration-150 ease-in-out',
    ]) }}>

    @if (isset($icon))
        <div class="mr-2">
            {{ $icon }}
        </div>
    @endif

    {{ $slot }}
</button>
