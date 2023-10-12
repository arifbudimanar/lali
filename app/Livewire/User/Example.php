<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.app')] // You can remove this because it's the default layout
    public function render(): View
    {
        return view('livewire.user.example');
    }
}
