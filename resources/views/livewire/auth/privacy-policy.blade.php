<div>
    <x-auth-card maxWidth="xl">
        <x-slot name="title">
            {{ __('Privacy Policy') }}
        </x-slot>

        <div class="prose dark:prose-invert prose-indigo">
            {!! $privacy !!}
        </div>
    </x-auth-card>
</div>
