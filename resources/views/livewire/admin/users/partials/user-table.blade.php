<div class="relative overflow-x-auto rounded-lg">
    <x-table>
        <x-table-head>
            <x-table-head-th>
                {{ __('No') }}
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('name')" class="flex items-center uppercase">
                    {{ __('Name') }}
                    @if ($sortField === 'name' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'name' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('id')" class="flex items-center uppercase">
                    {{ __('Id') }}
                    @if ($sortField === 'id' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'id' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('email')" class="flex items-center uppercase">
                    {{ __('Email') }}
                    @if ($sortField === 'email' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'email' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('email_verified_at')" class="flex items-center uppercase">
                    {{ __('Email Status') }}
                    @if ($sortField === 'email_verified_at' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'email_verified_at' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('created_at')" class="flex items-center uppercase">
                    {{ __('Created At') }}
                    @if ($sortField === 'created_at' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'created_at' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('updated_at')" class="flex items-center uppercase">
                    {{ __('Updated At') }}
                    @if ($sortField === 'updated_at' && $sortDirection === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sortField === 'updated_at' && $sortDirection === 'desc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </button>
            </x-table-head-th>
            <x-table-head-th>
                {{ __('Actions') }}
            </x-table-head-th>
        </x-table-head>

        <x-table-body>
            @forelse ($users as $user)
                <x-table-body-tr wire:key="{{ $user->id }}">
                    <x-table-body-td>
                        {{ $loop->iteration + $users->firstItem() - 1 }}
                    </x-table-body-td>
                    <x-table-body-th>
                        <a wire:navigate href="{{ route('admin.users.show', $user) }}" class="hover:underline">
                            {{ $user->name }}
                        </a>
                    </x-table-body-th>
                    <x-table-body-td>
                        {{ $user->id }}
                    </x-table-body-td>
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
                        <x-table-action-link type="success" href="{{ route('admin.users.show', $user) }}">
                            {{ __('Show') }}
                        </x-table-action-link>
                        <x-table-action-link href="{{ route('admin.users.edit', $user) }}">
                            {{ __('Edit') }}
                        </x-table-action-link>
                        <x-table-action-button type="danger" wire:click="confirmUserDeletion({{ $user }})"
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
