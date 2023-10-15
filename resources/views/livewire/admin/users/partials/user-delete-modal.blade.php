<x-dialog-modal wire:model="confirming_user_deletion">
    <x-slot name="title">
        {{ __('Delete User') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Are you sure you want delete this user? Related data to this user will also be deleted. This action cannot be undone.') }}
        </div>

        @if ($selected_user_delete)
            <div class="max-w-lg mt-2 text-base text-zinc-600 dark:text-zinc-400">
                {{ $selected_user_delete->name }}
            </div>
            <div class="max-w-lg text-sm text-zinc-600 dark:text-zinc-400">
                {{ $selected_user_delete->email }}
            </div>
        @endif
    </x-slot>

    <x-slot name="footer">
        <x-danger-button wire:click="deleteUser" wire:loading.attr="disabled">
            {{ __('Delete User') }}
        </x-danger-button>

        <x-secondary-button class="ml-3" wire:click="$toggle('confirming_user_deletion')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>
    </x-slot>
</x-dialog-modal>
