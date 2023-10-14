<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        {{-- You can use button link component or other component --}}
        <x-button-link href="#">
            {{ __('Create') }}
        </x-button-link>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full">
            {{-- <x-slot name="actions">
                <x-button-link href="#">
                    {{ __('Create') }}
                </x-button-link>
            </x-slot> --}}

            <x-slot name="title">
                {{ __('All Users') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Manage all users, search, filter and more.') }}
            </x-slot>

            <x-slot name="content">
                <div class="flex flex-col w-full gap-2 text-center sm:items-center sm:text-left sm:flex-row">
                    <div>
                        <x-text-input id="name" type="text" class="block w-full" wire:model="name" required
                            autofocus autocomplete="name" placeholder="{{ __('Search by name or email') }}"
                            wire:model.live.debounce.500ms="search" />
                    </div>
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
                    <x-action-message class="sm:ml-3" on="userDeleted">
                        {{ __('User deleted.') }}
                    </x-action-message>
                </div>
                {{-- <x-action-message class="text-center sm:text-left" on="userDeleted">
                    {{ __('User Deleted.') }}
                </x-action-message> --}}
                <div class="relative overflow-x-auto rounded-lg">
                    <x-table>
                        <x-table-head>
                            <x-table-head-th>
                                {{ __('No') }}
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('id')" class="flex items-center uppercase">
                                    {{ __('Id') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('name')" class="flex items-center uppercase">
                                    {{ __('Name') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('email')" class="flex items-center uppercase">
                                    {{ __('Email') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('email_verified_at')" class="flex items-center uppercase">
                                    {{ __('Verify Email') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('created_at')" class="flex items-center uppercase">
                                    {{ __('Created At') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                <button wire:click="sortBy('updated_at')" class="flex items-center uppercase">
                                    {{ __('Updated At') }}
                                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </button>
                            </x-table-head-th>
                            <x-table-head-th>
                                {{ __('Actions') }}
                            </x-table-head-th>
                        </x-table-head>

                        <x-table-body>
                            @forelse ($users as $user)
                                <x-table-body-tr wire:key="{{ $user->id }}">
                                    <x-table-body-th>
                                        {{ $loop->iteration + $users->firstItem() - 1 }}
                                    </x-table-body-th>
                                    <x-table-body-th>
                                        {{ $user->id }}
                                    </x-table-body-th>
                                    <x-table-body-th>
                                        {{ $user->name }}
                                    </x-table-body-th>
                                    <x-table-body-td>
                                        {{ $user->email }}
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        @if ($user->email_verified_at)
                                            <x-badge type="success">
                                                {{ __('Verified') }}
                                            </x-badge>
                                        @else
                                            <x-badge type="danger">
                                                {{ __('Not Verified') }}
                                            </x-badge>
                                        @endif
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        {{-- {{ $user->created_at->format('d M Y') }} --}}
                                        {{ $user->created_at->diffForHumans() }}
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        {{-- {{ $user->updated_at->format('d M Y') }} --}}
                                        {{ $user->updated_at->diffForHumans() }}
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        <a href="#"
                                            class="font-medium text-indigo-600 dark:text-indigo-500 hover:underline">
                                            {{ __('Show') }}
                                        </a>
                                        <a href="#"
                                            class="font-medium text-green-600 dark:text-green-500 hover:underline">
                                            {{ __('Edit') }}
                                        </a>
                                        <button class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                            wire:click="confirmUserDeletion({{ $user }})"
                                            wire:loading.attr="disabled">
                                            {{ __('Delete') }}
                                        </button>
                                    </x-table-body-td>
                                </x-table-body-tr>
                            @empty
                                <x-table-body-tr>
                                    <th scope="row" colspan="7"
                                        class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ __('Data Not Found') }}
                                    </th>
                                </x-table-body-tr>
                            @endforelse
                        </x-table-body>
                    </x-table>
                </div>

                <x-dialog-modal wire:model="confirmingUserDeletion">
                    <x-slot name="title">
                        {{ __('Delete User') }}
                    </x-slot>

                    <x-slot name="content">
                        <div class="max-w-lg text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Are you sure you want delete this user? Related data to this user will also be deleted. This action cannot be undone.') }}
                        </div>

                        @if ($selectedUserDelete)
                            <div class="max-w-lg mt-2 text-base text-gray-600 dark:text-gray-400">
                                {{ $selectedUserDelete->name }}
                            </div>
                        @endif

                        {{-- <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-text-input id="password" type="password" class="block w-full mt-1" wire:model="password"
                                required autocomplete="password" />
                            <x-input-error for="password" class="mt-2" />
                        </div> --}}
                    </x-slot>

                    <x-slot name="footer">
                        <x-danger-button wire:click="deleteUser" wire:loading.attr="disabled">
                            {{ __('Delete User') }}
                        </x-danger-button>

                        <x-secondary-button class="ml-3" wire:click="$toggle('confirmingUserDeletion')"
                            wire:loading.attr="disabled">
                            {{ __('Cancel') }}
                        </x-secondary-button>
                    </x-slot>
                </x-dialog-modal>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </x-slot>
        </x-app-card>

    </div>
</div>
