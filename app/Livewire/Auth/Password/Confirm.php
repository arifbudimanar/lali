<?php

namespace App\Livewire\Auth\Password;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Toaster;

class Confirm extends Component
{
    public string $password;

    public function rules(): array
    {
        return [
            'password' => ['required', 'current_password'],
        ];
    }

    public function confirmPassword(): void
    {
        $this->validate();
        session()->put('auth.password_confirmed_at', time());
        Toaster::info('Password confirmed.');
        $this->redirect(session('url.intended', route('user.dashboard')), navigate: true);
    }

    #[Layout('layouts.auth')]
    public function render(): View
    {
        if (session()->has('auth.password_confirmed_at')) {
            $this->redirect(session('url.intended', route('user.dashboard')), navigate: true);
        }

        return view('livewire.auth.password.confirm');
    }
}
