<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
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
                {{ __('Manage all users, search, sort by, sort direction and more.') }}
            </x-slot>

            <x-slot name="content">
                <div
                    class="flex flex-col w-full gap-2 text-center sm:justify-between sm:items-center sm:gap-4 sm:text-left sm:flex-row">
                    {{-- Search --}}
                    <x-text-input id="search" type="text" class="" required autofocus autocomplete="search"
                        class="w-full sm:w-1/2" placeholder="{{ __('Search by name or email') }}"
                        wire:model.live.debounce.500ms="search" />

                    {{-- Filter --}}
                    {{-- <div class="flex gap-2">
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
