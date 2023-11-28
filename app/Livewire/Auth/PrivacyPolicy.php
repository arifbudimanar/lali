<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    #[Layout('layouts.auth')]
    #[Title('Privacy Policy')]
    public function render(): View
    {
        session()->put('url.intended', route('privacypolicy'));

        $locale = session('locale', app()->getLocale());
        $privacyFile = resource_path("markdown/privacy-policy-$locale.md");
        if (! file_exists($privacyFile)) {
            $privacyFile = resource_path('markdown/privacy-policy-en.md');
        }
        $privacy = Str::markdown(file_get_contents($privacyFile));

        return view('livewire.auth.privacy-policy', compact('privacy'));
    }
}
