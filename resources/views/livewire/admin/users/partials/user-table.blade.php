<div class="relative overflow-x-auto rounded-lg">
    <x-table>
        <x-table-head>
            <x-table-head-th>
                {{ __('No') }}
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('id')" class="flex items-center uppercase">
                    {{ __('Id') }}
                    <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
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
                    {{ __('Email Status') }}
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
                        <a wire:navigate href="{{ route('admin.users.show', $user) }}" class="hover:underline">
                            {{ $user->name }}
                        </a>
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
                        {{ $user->created_at->diffForHumans() }}
                    </x-table-body-td>
                    <x-table-body-td>
                        {{ $user->updated_at->diffForHumans() }}
                    </x-table-body-td>
                    <x-table-body-td>
                        <x-table-action-link href="{{ route('admin.users.show', $user) }}">
                            {{ __('Show') }}
                        </x-table-action-link>
                        <x-table-action-link href="{{ route('admin.users.edit', $user) }}">
                            {{ __('Edit') }}
                        </x-table-action-link>
                        <x-table-action-button wire:click="confirmUserDeletion({{ $user }})"
                            wire:loading.attr="disabled">
                            {{ __('Delete') }}
                        </x-table-action-button>
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
