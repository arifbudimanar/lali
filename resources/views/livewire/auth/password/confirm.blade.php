<div>
    <x-auth-card title="{{ __('Confirm Password') }}">
        <div class="mb-4 text-zinc-600 dark:text-zinc-400">
            {{ __('Please confirm your password before continuing.') }}
        </div>

        <form wire:submit="confirmPassword">
            {{-- Password --}}
            <div>
                <x-label for="password" value="{{ __('Password') }}" required />
                <x-text-input id="password" class="block w-full mt-1" type="password" wire:model="password" name="password"
                    required autofocus autocomplete="password" placeholder="••••••••" />
                <x-input-error for="password" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-button wire:loading.attr="disabled">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</div>
