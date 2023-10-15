<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Hash;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public string $name;

    public string $email;

    public function updateUserRules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
        ];
    }

    public function createUser(): void
    {
        $this->validate(
            $this->updateUserRules()
        );
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make('password'),
        ]);
        session()->flash('userCreated', __('User created.'));
        $this->redirect(session('url.intended', route('admin.users.index')), navigate: true);
    }

    public function cancelCreate(): void
    {
        $this->redirect(session('url.intended', route('admin.users.index')), navigate: true);
    }

    #[Layout('layouts.admin')]
    public function render(): View
    {
        return view('livewire.admin.users.create');
    }
}
