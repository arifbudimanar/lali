<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

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

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
        ];
    }

    public function updateUser(): void
    {
        $this->validate();
        if ($this->email !== $this->user->email) {
            $this->user->timestamps = false;
            $this->user->forceFill([
                'email_verified_at' => null,
            ])->save();
        }
        if ($this->name === $this->user->name && $this->email === $this->user->email) {
            Toaster::info('Nothing changed.');

            return;
        }
        $this->user->timestamps = false;
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        Toaster::success('User updated.');
        $this->redirect(session('url.intended', route('admin.users.show', $this->user)), navigate: true);
    }

    public function cancelEdit(): void
    {
        $this->redirect(session('url.intended', route('admin.users.show', $this->user)), navigate: true);
    }

    #[Layout('layouts.admin')]
    #[Title('Admin Users Edit')]
    public function render(): View
    {
        return view('livewire.admin.user.edit');
    }
}
