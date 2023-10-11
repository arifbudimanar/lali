<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full">
            <x-slot name="title">
                {{ __('Welcome to :appname Admin Dashboard', ['appname' => config('app.name')]) }}
            </x-slot>

            <x-slot name="description">
                {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}
            </x-slot>
        </x-app-card>
    </div>
</div>
