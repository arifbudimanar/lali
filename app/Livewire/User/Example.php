<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Example extends Component
{
    #[Title('User Example')]
    public function render(): View
    {
        session()->put('url.intended', route('user.example'));

        return view('livewire.user.example');
    }
}
