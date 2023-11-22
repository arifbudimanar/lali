<x-dialog-modal wire:model="confirming_user_deletion" title="{{ __('Delete User') }}">
    <x-slot:content>
        <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Are you sure you want delete this user? Related data to this user will also be deleted. This action cannot be undone.') }}
        </div>

        @if ($selected_user_delete)
            <div class="max-w-lg mt-2 text-sm font-semibold text-zinc-600 dark:text-zinc-400">
                {{ $selected_user_delete->name }}
            </div>
            <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
                {{ $selected_user_delete->email }}
            </div>
            @if ($selected_user_delete == auth()->user())
                <div class="max-w-lg mt-2 text-sm text-red-600 dark:text-red-400">
                    {{ __('You are currently logged in as this user. Deleting this user will log you out, and you won\'t be able to log back in.') }}
                </div>
            @endif
        @endif
    </x-slot:content>

    <x-slot:footer>
        <x-danger-button wire:click="deleteUser" wire:loading.attr="disabled">
            {{ __('Delete User') }}
        </x-danger-button>

        <x-secondary-button class="ml-3" wire:click="$toggle('confirming_user_deletion')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>
    </x-slot:footer>
</x-dialog-modal>
