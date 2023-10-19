<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    use WithPagination;

    #[Url(as: 'search', history: false)]
    public $search;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    #[Url(as: 'sortby', keep: true, history: false)]
    public string $sortField = 'created_at';

    #[Url(as: 'sortdir', keep: true, history: false),]
    public string $sortDirection = 'desc';

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
        $this->resetPage();
    }

    public function getCurrentPage()
    {
        return Paginator::resolveCurrentPage();
    }

    public bool $confirming_user_deletion = false;

    public ?User $selected_user_delete;

    public function confirmUserDeletion(User $user): void
    {
        $this->confirming_user_deletion = true;
        $this->selected_user_delete = $user;
    }

    public function deleteUser(): void
    {
        $this->selected_user_delete->delete();
        $this->confirming_user_deletion = false;
        Toaster::success('User deleted.');
    }

    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.users.index', [
            'sortdir' => $this->sortDirection,
            'sortby' => $this->sortField,
            'search' => $this->search,
            'page' => $this->getCurrentPage(),
        ]));

        $users = User::search($this->search)
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
        // ->simplePaginate(10);

        return view('livewire.admin.users.index', compact('users'));
    }
}
