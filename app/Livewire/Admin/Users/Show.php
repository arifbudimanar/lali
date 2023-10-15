<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.users.show', $this->user));

        return view('livewire.admin.users.show');
    }
}