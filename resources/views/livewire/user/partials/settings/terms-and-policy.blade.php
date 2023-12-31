<x-app-card title="{{ __('Terms of Service and Privacy Policy') }}"
    description="{{ __('Please take a moment to review our Terms of Service and Privacy Policy. By registering, you explicitly agree to comply with these Terms of Service and Privacy Policy.') }}">
    <x-slot:actions>
        <x-button-link target="_blank" href="{{ route('termsofservice') }}">
            {{ __('View Terms of Service') }}
        </x-button-link>

        <x-button-link target="_blank" href="{{ route('privacypolicy') }}">
            {{ __('View Privacy Policy') }}
        </x-button-link>
    </x-slot:actions>
</x-app-card>
