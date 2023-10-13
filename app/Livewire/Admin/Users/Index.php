<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Url()]
    public $search;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public bool $confirmingUserDeletion = false;

    public ?User $selectedUserDelete;

    public function confirmUserDeletion(User $user)
    {
        $this->confirmingUserDeletion = true;
        $this->selectedUserDelete = $user;
    }

    public function deleteUser()
    {
        $this->selectedUserDelete->delete();
        $this->confirmingUserDeletion = false;
        $this->dispatch('userDeleted');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        $users = User::search($this->search)
            ->orderBy('name', 'asc')
            ->paginate(10);

        return view('livewire.admin.users.index', compact('users'));
    }
}
