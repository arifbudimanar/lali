<td {{ $attributes->merge([
    'class' => 'px-6 py-4 space-x-2 whitespace-nowrap',
]) }}>
    <div class="inline-flex items-center font-medium whitespace-nowrap">
        <x-icon-data-not-found class="w-5 h-5 mr-2" />

        {{ __('Data Not Found') }}
    </div>
</td>
