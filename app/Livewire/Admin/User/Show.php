<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    #[Layout('layouts.admin')]
    #[Title('Admin Users Show')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.users.show', $this->user));

        return view('livewire.admin.user.show');
    }
}
