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
                    class="flex flex-col w-full gap-2 text-center md:justify-between md:items-center md:gap-4 md:text-left md:flex-row">
                    {{-- Search --}}
                    <div class="flex items-center justify-center w-full md:w-1/2 2xl:w-2/6">
                        <x-text-input id="search" type="text" class="" required autofocus
                            autocomplete="search" class="w-full" placeholder="{{ __('Search by name or email') }}"
                            wire:model.live.debounce.500ms="search" />
                        @if ($search)
                            <x-secondary-button wire:click="clearSearch" class="ml-2 w-min">
                                {{ __('Clear') }}
                            </x-secondary-button>
                        @endif
                    </div>

                    {{-- Filter --}}
                    <div class="flex gap-4">
                        {{-- <x-select-input wire:model="filter" id="filter" name="filter"
                            class="block w-full md:min-w-max">
                            <option>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </x-select-input> --}}

                        {{-- Role --}}
                        {{-- <div class="flex justify-between w-full ">
                            <p class="flex items-center mr-2 whitespace-nowrap">{{ __('Role') }}</p>
                            <x-select-input wire:model.live.debounce.500ms="role" id="role" name="role"
                                class="block w-min md:w-min">
                                <option>Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </x-select-input>
                        </div> --}}

                        {{-- Per Page --}}
                        <div class="flex justify-between w-full ">
                            <p class="flex items-center mr-2 whitespace-nowrap">{{ __('Per Page') }}</p>
                            <x-select-input wire:model.live.debounce.500ms="paginate" id="paginate" name="paginate"
                                class="block w-min md:w-min">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </x-select-input>
                        </div>
                    </div>
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
