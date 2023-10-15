<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render(): View
    {
        session()->put('url.intended', route('user.dashboard'));

        return view('livewire.user.dashboard');
    }
}
