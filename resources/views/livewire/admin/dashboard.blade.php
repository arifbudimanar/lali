<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        {{-- Welcome admin --}}
        <x-app-card maxWidth="full"
            title="{{ __('Welcome to :appname Admin Dashboard', ['appname' => config('app.name')]) }}"
            description="{{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}">
        </x-app-card>

        {{-- User statistic --}}
        <x-app-card maxWidth="full" title="{{ __('User Statistics') }}">
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 sm:gap-6">
                    <x-stat-card title="  {{ __('Total users') }}" stats="  {{ $total_users }}" />
                    <x-stat-card title="{{ __('Verified email users') }}" stats="{{ $total_verified_users }}" />
                    <x-stat-card title=" {{ __('Unverified email users') }}" stats="{{ $total_unverified_users }}" />
                    <x-stat-card title=" {{ __('Registered users last month') }}"
                        stats="{{ $total_register_last_month }}" />
                </div>
            </x-slot>
        </x-app-card>

        <div class="space-y-2 sm:space-y-8 md:space-y-0 md:flex">
            {{-- Latest created users --}}
            <x-app-card maxWidth="full" title=" {{ __('Latest Created Users') }}">
                <x-slot name="content">
                    <ul role="list" class="divide-y divide-zinc-100 dark:divide-zinc-700">
                        @foreach ($latest_created_users as $user)
                            <li class="flex justify-between py-4 gap-x-6">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="justify-between flex-auto min-w-0">
                                        <a wire:navigate href="{{ route('admin.users.show', $user) }}"
                                            class="font-semibold leading-6 hover:underline ">
                                            {{ $user->name }}
                                        </a>

                                        <p class="mt-2 leading-5 truncate">
                                            {{ $user->email }}
                                        </p>

                                        <p class="mt-2 text-xs xl:hidden">
                                            <span>
                                                {{ $user->created_at->diffForHumans() }}
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="justify-between hidden shrink-0 xl:flex xl:flex-col xl:items-end">
                                    @if ($user->email_verified_at)
                                        <x-badge type="success">
                                            {{ __('Verified') }}
                                        </x-badge>
                                    @else
                                        <x-badge type="danger">
                                            {{ __('Not Verified') }}
                                        </x-badge>
                                    @endif

                                    <p class="mt-2 text-xs">
                                        <span>
                                            {{ $user->created_at->diffForHumans() }}
                                        </span>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-app-card>

            {{-- Latest updated users --}}
            <x-app-card maxWidth="full" title=" {{ __('Latest Updated Users') }}">
                <x-slot name="content">
                    <ul role="list" class="divide-y divide-zinc-100 dark:divide-zinc-700">
                        @foreach ($latest_updated_users as $user)
                            <li class="flex justify-between py-4 gap-x-6">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="justify-between flex-auto min-w-0">
                                        <a wire:navigate href="{{ route('admin.users.show', $user) }}"
                                            class="font-semibold leading-6 hover:underline ">
                                            {{ $user->name }}
                                        </a>

                                        <p class="mt-2 leading-5 truncate">
                                            {{ $user->email }}
                                        </p>

                                        <p class="mt-2 text-xs xl:hidden">
                                            <span>
                                                {{ $user->updated_at->diffForHumans() }}
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <div class="justify-between hidden shrink-0 xl:flex xl:flex-col xl:items-end">
                                    @if ($user->email_verified_at)
                                        <x-badge type="success">
                                            {{ __('Verified') }}
                                        </x-badge>
                                    @else
                                        <x-badge type="danger">
                                            {{ __('Not Verified') }}
                                        </x-badge>
                                    @endif

                                    <p class="mt-2 text-xs">
                                        <span>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </span>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-app-card>
        </div>
    </div>
</div>
