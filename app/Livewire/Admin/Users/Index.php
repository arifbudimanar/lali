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

    #[Url(as: 'sortby', keep: true, history: false)]
    public string $sort_field = 'created_at';

    #[Url(as: 'sortdir', keep: true, history: false),]
    public string $sort_direction = 'desc';

    #[Url(as: 'search', keep: true, history: false)]
    public string $search = '';

    #[Url(as: 'paginate', keep: true, history: false)]
    public int $paginate = 10;

    public function sortBy(string $field): void
    {
        if ($this->sort_field === $field) {
            $this->sort_direction = $this->sort_direction === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sort_direction = 'asc';
        }
        $this->sort_field = $field;
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedPaginate()
    {
        $this->resetPage();
    }

    public function clearSearch()
    {
        $this->reset('search');
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

    public function getCurrentPage(): int
    {
        return Paginator::resolveCurrentPage();
    }

    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.users.index',
            [
                'sortdir' => $this->sort_direction,
                'sortby' => $this->sort_field,
                'search' => $this->search,
                'page' => $this->getCurrentPage(),
                'paginate' => $this->paginate,
            ]
        ));

        $users = User::search($this->search)
            ->orderBy($this->sort_field, $this->sort_direction)
            ->paginate($this->paginate);
        // ->simplePaginate($this->paginate);

        return view('livewire.admin.users.index', compact('users'));
    }
}
