<?php

namespace App\Livewire\Admin;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Example extends Component
{
    #[Layout('layouts.admin')]
    #[Title('Admin Example')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.example'));

        return view('livewire.admin.example');
    }
}
