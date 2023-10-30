<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card width="full" title="{{ __('Welcome to :appname', ['appname' => config('app.name')]) }}" />
    </div>
</div>
