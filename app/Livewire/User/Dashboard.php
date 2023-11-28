<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Dashboard extends Component
{
    #[Title('User Dashboard')]
    public function render(): View
    {
        session()->put('url.intended', route('user.dashboard'));

        return view('livewire.user.dashboard');
    }
}
