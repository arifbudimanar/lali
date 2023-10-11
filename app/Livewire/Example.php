<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.main')]
    public function render()
    {
        return view('livewire.example');
    }
}
