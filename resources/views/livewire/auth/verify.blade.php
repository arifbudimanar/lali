<div>
    <x-auth-card>
        <x-slot name="logo">
            <a wire:navigate href="{{ route('home') }}" class="font-bold text-md">
                {{ config('app.name', 'Laravel') }}
            </a>
        </x-slot>

        <x-slot name="title">
            {{ __('Verify') }}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('resent'))
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="flex items-center justify-between mt-4">
            <x-button wire:click="resend" wire:loading.attr="disabled">
                {{ __('Resend Verification Email') }}
            </x-button>

            <div>
                <a wire:navigate href="{{ route('user.profile') }}"
                    class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Edit Profile') }}</a>

                <button type="submit" wire:click="logout"
                    class="ml-2 text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Log Out') }}
                </button>
            </div>
        </div>
    </x-auth-card>
</div>
