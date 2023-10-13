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
            <x-slot name="actions">
                <x-button-link href="#">
                    {{ __('Create') }}
                </x-button-link>
            </x-slot>

            <x-slot name="title">
                {{ __('All User') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Manage all user in your application') }}
            </x-slot>

            <x-slot name="content">
                <div class="relative overflow-x-auto rounded-lg">
                    <x-table>
                        <x-table-head>
                            <x-table-head-th>
                                {{ __('Name') }}
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </x-table-head-th>
                            <x-table-head-th>
                                {{ __('Email') }}
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </x-table-head-th>
                            <x-table-head-th>
                                {{ __('Created At') }}
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </x-table-head-th>
                            <x-table-head-th>
                                {{ __('Updated At') }}
                                <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg>
                                </a>
                            </x-table-head-th>
                            <x-table-head-th>
                                {{ __('Actions') }}
                            </x-table-head-th>
                        </x-table-head>

                        <x-table-body>
                            @forelse ($users as $user)
                                <x-table-body-tr>
                                    <x-table-body-th>
                                        {{ $user->name }}
                                    </x-table-body-th>
                                    <x-table-body-td>
                                        {{ $user->email }}
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        {{ $user->created_at->format('d M Y') }}
                                    </x-table-body-td>
                                    <x-table-body-td>
                                        {{ $user->updated_at->format('d M Y') }}
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
                                        <a href="#"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            {{ __('Delete') }}
                                        </a>
                                    </x-table-body-td>
                                </x-table-body-tr>
                            @empty
                                <x-table-body-tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ __('No Data Found') }}
                                    </th>
                                </x-table-body-tr>
                            @endforelse
                        </x-table-body>
                    </x-table>
                </div>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </x-slot>
        </x-app-card>

    </div>
</div>
