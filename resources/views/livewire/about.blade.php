<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-800 dark:text-zinc-200">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card>
            <x-slot name="title">
                <div class="space-x-2">
                    <x-button-link href="https://github.com/arifbudimanar/lali" target="_blank">
                        Github
                    </x-button-link>

                    <x-button-link href="https://packagist.org/packages/arifbudimanar/lali" target="_blank">
                        Packagist
                    </x-button-link>
                </div>
            </x-slot>

            <x-slot name="content">
                <div class="min-w-full mt-8 prose dark:prose-invert prose-indigo">
                    {!! $about !!}
                </div>
            </x-slot>
        </x-app-card>
    </div>
</div>
