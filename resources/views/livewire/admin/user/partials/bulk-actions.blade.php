<div class="mt-4 w-min">
    <x-dropdown align="left" width="auto">
        <x-slot:trigger>
            <span class="inline-flex rounded-md">
                <x-secondary-button type="button" class="flex items-center whitespace-nowrap">
                    {{ __('Bulk Actions') }}
                    <span>
                        <x-icon-arrow-down x-show="!open" class="ml-2 -mr-0.5 w-4 h-4" />

                        <x-icon-arrow-up x-show="open" style="display: none;" class="ml-2 -mr-0.5 w-4 h-4" />
                    </span>
                </x-secondary-button>
            </span>
        </x-slot:trigger>

        <x-slot:content>
            <x-dropdown-button wire:click="deleteSelectedUsers">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </x-slot:icon>

                {{ __('Delete Selected') }}
            </x-dropdown-button>

            <x-dropdown-button wire:click="verifySelectedUsers">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot:icon>

                {{ __('Verify Selected') }}
            </x-dropdown-button>

            <x-dropdown-button wire:click="unverifySelectedUsers">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-slot:icon>

                {{ __('Unverify Selected') }}
            </x-dropdown-button>
        </x-slot:content>
    </x-dropdown>
</div>
