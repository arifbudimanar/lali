@props(['session'])

@if (session($session))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show" x-transition:leave.opacity.duration.1500ms
        style="display: none;" {{ $attributes->merge(['class' => 'text-sm text-zinc-600 dark:text-zinc-400']) }}>
        {{ session($session) }}
    </div>
@endif
