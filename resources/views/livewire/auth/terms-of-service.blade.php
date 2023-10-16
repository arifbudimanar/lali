<div>
    <x-auth-card maxWidth="xl">
        <x-slot name="title">
            {{ __('Terms of Service') }}
        </x-slot>

        <div class="prose dark:prose-invert prose-indigo">
            {!! $terms !!}
        </div>
    </x-auth-card>
</div>
