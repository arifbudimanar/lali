<?php

namespace App\Livewire\Admin;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.admin')]
    public function render(): View
    {
        return view('livewire.admin.example');
    }
}
