<div>
    <x-auth-card maxWidth="xl">
        <x-slot name="logo">
            <a wire:navigate href="{{ route('home') }}" class="font-bold text-md">
                {{ config('app.name', 'Laravel') }}
            </a>
        </x-slot>

        <x-slot name="title">
            {{ __('Terms of Service') }}
        </x-slot>

        <div class="prose dark:prose-invert prose-indigo">
            {!! $terms !!}
        </div>
    </x-auth-card>
</div>
