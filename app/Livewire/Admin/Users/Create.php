<?php

namespace App\Livewire\Admin\Users;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', url()->current());

        return view('livewire.admin.users.create');
    }
}
