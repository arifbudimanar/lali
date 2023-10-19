<div>
    <x-auth-card>
        <x-slot name="title">
            {{ __('Verify') }}
        </x-slot>

        <div class="mb-4 text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        <div class="flex items-center justify-between mt-4">
            <x-button wire:click="resend" wire:loading.attr="disabled">
                {{ __('Resend Verification Email') }}
            </x-button>

            <div>
                <a wire:navigate href="{{ route('user.profile') }}"
                    class="text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800">
                    {{ __('Edit Profile') }}</a>

                <button type="submit" wire:click="logout"
                    class="ml-2 text-sm underline rounded-md text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-zinc-800">
                    {{ __('Log Out') }}
                </button>
            </div>
        </div>
    </x-auth-card>
</div>
