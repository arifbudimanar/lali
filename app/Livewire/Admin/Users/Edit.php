<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public string $name;

    public string $email;

    public function mount(User $user): void
    {
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateUserRules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
        ];
    }

    public function updateUser(): void
    {
        $this->validate(
            $this->updateUserRules()
        );
        if ($this->email !== $this->user->email) {
            $this->user->forceFill([
                'email_verified_at' => null,
            ])->save();
        }
        if ($this->name === $this->user->name && $this->email === $this->user->email) {
            $this->dispatch('nothingChanged');

            return;
        }
        $this->user->timestamps = false;
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->dispatch('userUpdated');
        $this->redirect(session('url.intended', route('admin.users.show', $this->user)), navigate: true);
    }

    public function cancelEdit(): void
    {
        $this->redirect(session('url.intended', route('admin.users.show', $this->user)), navigate: true);
    }

    #[Layout('layouts.admin')]
    public function render(): View
    {
        return view('livewire.admin.users.edit');
    }
}
