<div>
    <x-slot:header>
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('Profile') }}
        </h2>
    </x-slot:header>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        @include('livewire.user.partials.profile.update-profile')

        @include('livewire.user.partials.profile.update-password')

        @include('livewire.user.partials.profile.delete-account')
    </div>
</div>
