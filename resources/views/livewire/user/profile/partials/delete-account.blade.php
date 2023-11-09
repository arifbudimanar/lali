<x-app-card title=" {{ __('Delete Account') }}" description="{{ __('Permanently delete your account.') }}">
    <x-slot name="content">
        <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-4">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>

        <x-dialog-modal wire:model="confirming_user_deletion">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
                    {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </div>

                {{-- Password --}}
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" required />
                    <x-text-input id="password" type="password" class="block w-full mt-1" wire:model="password"
                        required autocomplete="password" placeholder="••••••••" />
                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-danger-button wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-danger-button>

                <x-secondary-button class="ml-3" wire:click="$toggle('confirming_user_deletion')"
                    wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-app-card>
