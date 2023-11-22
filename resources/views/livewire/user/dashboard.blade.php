<div>
    <x-slot:header>
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Your Dashboard') }}
        </h2>
    </x-slot:header>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        {{-- Welcome app --}}
        <x-app-card title="{{ __('Welcome to :appname Dashboard', ['appname' => config('app.name')]) }}"
            description=" {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}">
        </x-app-card>
    </div>
</div>
