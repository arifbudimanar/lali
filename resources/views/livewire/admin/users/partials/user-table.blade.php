<div class="relative mt-4 overflow-x-auto rounded-lg">
    <x-table>
        <x-table-head>
            <x-table-head-th>
                {{ __('No') }}
            </x-table-head-th>
            <x-table-head-th>
                <button wire:click="sortBy('name')" class="flex items-center uppercase">
                    {{ __('Name') }}
                    @if ($sort_field === 'name' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'name' && $sort_direction === 'desc')
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
                    @if ($sort_field === 'id' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'id' && $sort_direction === 'desc')
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
                    @if ($sort_field === 'email' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'email' && $sort_direction === 'desc')
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
                    @if ($sort_field === 'email_verified_at' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'email_verified_at' && $sort_direction === 'desc')
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
                    @if ($sort_field === 'created_at' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'created_at' && $sort_direction === 'desc')
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
                    @if ($sort_field === 'updated_at' && $sort_direction === 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 ml-1.5">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
                                clip-rule="evenodd" />
                        </svg>
                    @elseif($sort_field === 'updated_at' && $sort_direction === 'desc')
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
                    <x-table-body-th class="w-full">
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
                        <x-table-action-link type="success" href="{{ route('admin.users.show', $user) }}"
                            wire:loading.attr="disabled">
                            {{ __('Show') }}
                        </x-table-action-link>
                        <x-table-action-link href="{{ route('admin.users.edit', $user) }}"
                            wire:loading.attr="disabled">
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
                    <x-table-body-th colspan="7" class="text-center">
                        {{ __('Data Not Found') }}
                    </x-table-body-th>
                </x-table-body-tr>
            @endforelse
        </x-table-body>
    </x-table>
</div>
