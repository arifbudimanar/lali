<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    public string $name;

    public string $email;

    public function updateUserRules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255|regex:/^[a-zA-Z\s]+$/',
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
        Toaster::success('User created.');
        $this->redirect(session('url.intended', route('admin.user.index')), navigate: true);
    }

    public function cancelCreate(): void
    {
        $this->redirect(session('url.intended', route('admin.user.index')), navigate: true);
    }

    #[Layout('layouts.admin')]
    public function render(): View
    {
        return view('livewire.admin.user.create');
    }
}
