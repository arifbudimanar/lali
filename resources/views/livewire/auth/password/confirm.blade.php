<div>
    <x-auth-card>
        <x-slot name="title">
            {{ __('Confirm Password') }}
        </x-slot>

        <div class="mb-4 text-zinc-600 dark:text-zinc-400">
            {{ __('Please confirm your password before continuing.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form wire:submit="confirmPassword">
            {{-- Password --}}
            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password" name="password"
                    :value="old('password')" required autofocus autocomplete="password" />
                <x-input-error for="password" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-button wire:loading.attr="disabled">
                    {{ __('Confirm Password') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</div>
