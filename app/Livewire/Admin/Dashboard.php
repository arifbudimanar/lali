<?php

namespace App\Livewire\Admin;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', url()->current());

        return view('livewire.admin.dashboard');
    }
}
