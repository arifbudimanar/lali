<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.main')]
    #[Title('Home')]
    public function render(): View
    {
        session()->put('url.intended', route('home'));

        return view('livewire.home');
    }
}
