<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Your Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card>
            <x-slot name="title">
                {{ __('Welcome to :appname', ['appname' => config('app.name')]) }}
            </x-slot>
            <x-slot name="description">
                {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}
            </x-slot>
        </x-app-card>

        @if (session('status'))
            <x-app-card>
                <x-slot name="title">
                    {{ __('Status') }}
                </x-slot>
                <x-slot name="description">
                    {{ session('status') }}
                </x-slot>
            </x-app-card>
        @endif
    </div>
</div>
