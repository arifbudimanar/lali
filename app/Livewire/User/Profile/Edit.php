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
use Masmerise\Toaster\Toaster;

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
            'name' => 'required|string|min:3|max:255|regex:/^[a-zA-Z\s]+$/',
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
            Toaster::info('Nothing changed.');

            return;
        }
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        Toaster::success('Profile updated.');
        $this->dispatch('profileUpdated');
    }

    public function sendEmailVerification(): void
    {
        $this->user->sendEmailVerificationNotification();
        Toaster::success('A new verification link has been sent to your email address.');
    }

    public string $current_password;

    public string $new_password;

    public string $new_password_confirmation;

    public function updatePasswordRules(): array
    {
        return [
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'different:current_password', Password::defaults()],
            'new_password_confirmation' => ['required', 'same:new_password'],
        ];
    }

    public function updatePassword(): void
    {
        $this->validate(
            $this->updatePasswordRules()
        );
        $this->user->update([
            'password' => Hash::make($this->new_password),
        ]);
        $this->reset('current_password', 'new_password', 'new_password_confirmation');
        Toaster::success('Password updated.');
    }

    public bool $confirming_user_deletion = false;

    public string $password;

    public function confirmUserDeletion(): void
    {
        $this->resetErrorBag();
        $this->reset('password');
        $this->confirming_user_deletion = true;
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
        $this->confirming_user_deletion = false;
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->regenerateToken();
        $this->user->delete();
        $this->user = null;
        if (config('session.driver') === 'file') {
            $this->deleteSessionFiles();
        }
        $this->redirect(route('home'), navigate: true);
        Toaster::success('User deleted.');
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
        session()->put('url.intended', route('user.profile'));

        return view('livewire.user.profile.edit');
    }
}
