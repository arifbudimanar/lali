<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.user.example');
    }
}
