<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TermsOfService extends Component
{
    #[Layout('layouts.auth')]
    public function render(): View
    {
        $locale = session('locale', app()->getLocale());
        $termsFile = resource_path("markdown/terms-of-service-$locale.md");
        if (! file_exists($termsFile)) {
            $termsFile = resource_path('markdown/terms-of-service-en.md');
        }
        $terms = Str::markdown(file_get_contents($termsFile));

        return view('livewire.auth.terms-of-service', compact('terms'));
    }
}
