<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class About extends Component
{
    #[Layout('layouts.main')]
    public function render(): View
    {
        session()->put('url.intended', route('about'));

        $aboutFile = resource_path('markdown/about.md');
        $about = Str::markdown(file_get_contents($aboutFile));

        return view('livewire.about', compact('about'));
    }
}
