<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <x-button-link wire:navigate href="{{ route('admin.users.create') }}">
            {{ __('Create') }}
        </x-button-link>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full">
            <x-slot name="title">
                {{ __('All Users') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Manage all users, search, filter and more.') }}
            </x-slot>

            <x-slot name="content">
                <div class="flex flex-col w-full gap-2 text-center sm:items-center sm:gap-0 sm:text-left sm:flex-row">
                    <x-text-input id="name" type="text" class="" wire:model="name" required autofocus
                        autocomplete="name" placeholder="{{ __('Search by name or email') }}"
                        wire:model.live.debounce.500ms="search" />
                    {{-- <div class="flex gap-4">
                        <x-select-input wire:model="filter" id="filter" name="filter" class="block w-full mt-1">
                            <option value="test">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </x-select-input>
                        <x-select-input wire:model="filter" id="filter" name="filter" class="block w-full mt-1">
                            <option value="test">User</option>
                        </x-select-input>
                        <x-select-input wire:model="filter" id="filter" name="filter" class="block w-full mt-1">
                            <option value="test">User</option>
                        </x-select-input>
                    </div> --}}
                    <x-action-message class="ml-3" on="userDeleted">
                        {{ __('User deleted.') }}
                    </x-action-message>
                </div>

                @include('livewire.admin.users.partials.user-table')

                @include('livewire.admin.users.partials.user-delete-modal')

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </x-slot>
        </x-app-card>

    </div>
</div>
