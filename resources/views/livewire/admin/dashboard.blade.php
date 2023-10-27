<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full">
            <x-slot name="title">
                {{ __('Welcome to :appname Admin Dashboard', ['appname' => config('app.name')]) }}
            </x-slot>

            <x-slot name="description">
                {{ __('You are logged in as :name.', ['name' => auth()->user()->name]) }}
            </x-slot>
        </x-app-card>
        <div class="space-y-2 sm:space-y-0 lg:space-y-0 sm:flex">
            <x-app-card maxWidth="full">
                <x-slot name="title">
                    {{ __('Total users') }}
                </x-slot>

                <x-slot name="description">
                    {{ $total_users }}
                </x-slot>
            </x-app-card>
            <x-app-card maxWidth="full">
                <x-slot name="title">
                    {{ __('Verified email users') }}
                </x-slot>

                <x-slot name="description">
                    {{ $total_verified_users }}
                </x-slot>
            </x-app-card>
            <x-app-card maxWidth="full">
                <x-slot name="title">
                    {{ __('Unverified email users') }}
                </x-slot>

                <x-slot name="description">
                    {{ $total_unverified_users }}
                </x-slot>
            </x-app-card>
        </div>
        <div class="space-y-2 sm:space-y-8 lg:space-y-0 lg:flex">
            <x-app-card maxWidth="full">
                <x-slot name="title">
                    {{ __('Latest created users') }}
                </x-slot>

                <x-slot name="content">
                    <ul role="list" class="">
                        @foreach ($latest_created_users as $user)
                            <li class="flex justify-between py-2 gap-x-6">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="flex-auto min-w-0">
                                        <a wire:navigate href="{{ route('admin.users.show', $user) }}"
                                            class="text-sm font-semibold leading-6 hover:underline ">
                                            {{ $user->name }}
                                        </a>
                                        <p class="mt-1 text-sm leading-5 truncate">
                                            {{ $user->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="hidden shrink-0 2xl:flex 2xl:flex-col 2xl:items-end">
                                    <p class="mt-1 text-xs leading-5 ">{{ __('Created at') }}
                                        <span>
                                            {{ $user->created_at->diffForHumans() }}
                                        </span>
                                    </p>
                                    @if ($user->email_verified_at)
                                        <x-badge type="success">
                                            {{ __('Verified') }}
                                        </x-badge>
                                    @else
                                        <x-badge type="danger">
                                            {{ __('Not Verified') }}
                                        </x-badge>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-app-card>

            <x-app-card maxWidth="full">
                <x-slot name="title">
                    {{ __('Latest updated users') }}
                </x-slot>

                <x-slot name="content">
                    <ul role="list" class="">
                        @foreach ($latest_updated_users as $user)
                            <li class="flex justify-between py-2 gap-x-6">
                                <div class="flex min-w-0 gap-x-4">
                                    <div class="flex-auto min-w-0">
                                        <a wire:navigate href="{{ route('admin.users.show', $user) }}"
                                            class="text-sm font-semibold leading-6 hover:underline ">
                                            {{ $user->name }}
                                        </a>
                                        <p class="mt-1 text-sm leading-5 truncate">
                                            {{ $user->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="hidden shrink-0 2xl:flex 2xl:flex-col 2xl:items-end">
                                    <p class="mt-1 text-xs leading-5 ">{{ __('Updated at') }}
                                        <span>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </span>
                                    </p>
                                    @if ($user->email_verified_at)
                                        <x-badge type="success">
                                            {{ __('Verified') }}
                                        </x-badge>
                                    @else
                                        <x-badge type="danger">
                                            {{ __('Not Verified') }}
                                        </x-badge>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </x-slot>
            </x-app-card>
        </div>
    </div>
</div>
