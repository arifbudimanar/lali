@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-zinc-700 dark:text-zinc-300']) }}>
    {{ $value ?? $slot }}
    @if (isset($attributes['required']))
        <span class="text-red-500">*</span>
    @endif
</label>
