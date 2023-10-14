<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // Search
    #[Url(as: 'search', history: true)]
    public $search;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    // Sort
    #[Url(as: 'sortby', keep: true, history: true)]
    #[Rule('sortdir', ['in:id,name,email,created_at,updated_at'])]
    public string $sortField = 'name';

    #[Url(as: 'sortdir', keep: true, history: true),]
    #[Rule('sortdir', ['in:asc,desc'])]
    public string $sortDirection = 'asc';

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    // Delete
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
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.admin.users.index', compact('users'));
    }
}
