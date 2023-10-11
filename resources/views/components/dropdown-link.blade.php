<a
    {{ $attributes->merge([
        'class' =>
            'w-full flex items-center px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out',
    ]) }}>
    @if (isset($icon))
        <div class="mr-2 ">
            {{ $icon }}
        </div>
    @endif
    {{ $slot }}
</a>
