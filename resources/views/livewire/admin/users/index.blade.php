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
        <x-app-card maxWidth="full" title="{{ __('All Users') }}"
            description="{{ __('Manage all users, search, sort by, sort direction and more.') }}">
            <x-slot name="content">
                <div class="flex flex-col w-full gap-2 text-center md:justify-between md:flex-row">
                    {{-- Search --}}
                    <div class="flex items-center">
                        <div class="w-full">
                            <x-text-input id="search" type="text" required autofocus autocomplete="search"
                                class="w-full" placeholder="{{ __('Search by name or email') }}"
                                wire:model.lazy="search" />
                        </div>
                        @if ($search)
                            <x-secondary-button wire:click="clearSearch" class="ml-2 w-min h-min">
                                {{ __('Clear') }}
                            </x-secondary-button>
                        @endif
                    </div>

                    {{-- Filter --}}
                    <div class="space-y-2 md:gap-2 md:space-y-0 md:flex">
                        {{-- Role --}}
                        {{-- <div class="flex justify-between w-full">
                            <p class="flex items-center mr-2 whitespace-nowrap">{{ __('Role') }}</p>
                            <x-select-input wire:model.lazy="filterRole" id="filterRole" name="filterRole"
                                class="block w-min md:w-min">
                                <option>{{ __('All') }}</option>
                                <option value="admin">{{ __('Admin') }}</option>
                                <option value="user">{{ __('User') }}</option>
                            </x-select-input>
                        </div> --}}

                        {{-- Per Page --}}
                        <div class="flex justify-between w-full">
                            <p class="flex items-center mr-2 whitespace-nowrap">{{ __('Per Page') }}</p>
                            <x-select-input wire:model.lazy="paginate" id="paginate" name="paginate"
                                class="block w-min md:w-min">
                                <option value="5">5</option>
                                <option value="8">8</option>
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
                    {{-- Scroll to top when changing page --}}
                    {{-- {{ $users->links() }} --}}

                    {{-- Disable scroll to top when changing page --}}
                    {{ $users->links(data: ['scrollTo' => false]) }}
                </div>
            </x-slot>
        </x-app-card>

    </div>
</div>
