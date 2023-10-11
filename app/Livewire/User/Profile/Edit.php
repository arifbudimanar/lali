<?php

namespace App\Livewire\User\Profile;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public ?User $user;

    public string $name;

    public string $email;

    public function mount(): void
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function updateProfileRules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
        ];
    }

    public function updateProfile(): void
    {
        $this->validate(
            $this->updateProfileRules()
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
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->dispatch('profileUpdated');
        $this->dispatch('saved');
    }

    public function sendEmailVerification(): void
    {
        $this->user->sendEmailVerificationNotification();
        session()->flash('resent');
    }

    public string $currentPassword;

    public string $newPassword;

    public string $newPasswordConfirmation;

    public function updatePasswordRules(): array
    {
        return [
            'currentPassword' => ['required', 'current_password'],
            'newPassword' => ['required', 'different:currentPassword', Password::defaults()],
            'newPasswordConfirmation' => ['required', 'same:newPassword'],
        ];
    }

    public function updatePassword(): void
    {
        $this->validate(
            $this->updatePasswordRules()
        );
        $this->user->update([
            'password' => Hash::make($this->newPassword),
        ]);
        $this->reset('currentPassword', 'newPassword', 'newPasswordConfirmation');
        $this->dispatch('updated');
    }

    public bool $confirmingUserDeletion = false;

    public string $password;

    public function confirmUserDeletion(): void
    {
        $this->resetErrorBag();
        $this->reset('password');
        $this->confirmingUserDeletion = true;
    }

    public function deleteAccountRules(): array
    {
        return [
            'password' => ['required', 'current_password'],
        ];
    }

    public function deleteUser(): void
    {
        $this->validate(
            $this->deleteAccountRules()
        );
        $this->confirmingUserDeletion = false;
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        $this->user->delete();
        $this->user = null;
        if (config('session.driver') === 'file') {
            $this->deleteSessionFiles();
        }
        $this->redirect(route('home'), navigate: true);
    }

    public function deleteSessionFiles(): Collection
    {
        return collect(glob(storage_path('framework/sessions/*')))->each(function ($file) {
            if (Str::contains(file_get_contents($file), Auth::id())) {
                unlink($file);
            }
        });
    }

    public function render(): View
    {
        session()->put('url.intended', url()->current());

        return view('livewire.user.profile.edit');
    }
}
