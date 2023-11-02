<div class="relative mt-4 overflow-x-auto rounded-lg">
    <x-table>
        <x-table-head>
            <x-table-head-tr>
                <x-table-head-th>
                    {{ __('No') }}
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('name')" class="flex items-center uppercase hover:underline">
                        {{ __('Name') }}

                        @if ($sort_field === 'name' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'name' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('id')" class="flex items-center uppercase hover:underline">
                        {{ __('Id') }}

                        @if ($sort_field === 'id' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'id' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('email')"
                        class="flex items-center uppercase hover:underline">
                        {{ __('Email') }}

                        @if ($sort_field === 'email' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'email' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('email_verified_at')"
                        class="flex items-center uppercase hover:underline">
                        {{ __('Email Status') }}

                        @if ($sort_field === 'email_verified_at' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'email_verified_at' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('created_at')"
                        class="flex items-center uppercase hover:underline">
                        {{ __('Created at') }}

                        @if ($sort_field === 'created_at' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'created_at' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    <button type="button" wire:click="sortBy('updated_at')"
                        class="flex items-center uppercase hover:underline">
                        {{ __('Updated at') }}

                        @if ($sort_field === 'updated_at' && $sort_direction === 'asc')
                            <x-icon-sort-asc class="w-4 h-4 ml-1.5" />
                        @elseif($sort_field === 'updated_at' && $sort_direction === 'desc')
                            <x-icon-sort-desc class="w-4 h-4 ml-1.5" />
                        @else
                            <x-icon-arrow-down class="w-4 h-4 ml-1.5" />
                        @endif
                    </button>
                </x-table-head-th>

                <x-table-head-th>
                    {{ __('Actions') }}
                </x-table-head-th>
            </x-table-head-tr>
        </x-table-head>

        <x-table-body wire:loading.class="opacity-70">
            @forelse ($users as $user)
                <x-table-body-tr wire:key="{{ $user->id }}">
                    <x-table-body-td>
                        {{ $loop->iteration + $users->firstItem() - 1 }}
                    </x-table-body-td>

                    <x-table-body-td class="w-full font-semibold">
                        <a wire:navigate href="{{ route('admin.users.show', $user) }}" class="hover:underline">
                            {{ $user->name }}
                        </a>
                    </x-table-body-td>

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
                    <x-table-body-not-found colspan="8" class="sm:text-center" />
                </x-table-body-tr>
            @endforelse
        </x-table-body>
    </x-table>
</div>
