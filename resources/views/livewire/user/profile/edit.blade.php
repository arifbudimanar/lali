<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        @include('livewire.user.profile.partials.update-profile')

        @include('livewire.user.profile.partials.update-password')

        @include('livewire.user.profile.partials.delete-account')
    </div>
</div>
