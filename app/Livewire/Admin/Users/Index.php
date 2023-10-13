<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.admin')]
    public function render()
    {
        $users = User::paginate(10);
        // $users = User::whereId(200)->paginate(10);

        return view('livewire.admin.users.index', compact('users'));
    }
}
