<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.main')]
    #[Title('Example')]
    public function render(): View
    {
        session()->put('url.intended', route('example'));

        return view('livewire.example');
    }
}
