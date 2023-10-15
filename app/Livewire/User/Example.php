<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.app')]
    public function render(): View
    {
        session()->put('url.intended', route('user.example'));

        return view('livewire.user.example');
    }
}
