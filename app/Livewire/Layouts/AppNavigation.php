<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class AppNavigation extends Component
{
    public function disableAdminMode(): void
    {
        session()->forget('auth.password_confirmed_at');
        $this->redirect(session('url.intended', route('user.dashboard')), navigate: true);
    }

    public function logout(): void
    {
        Auth::guard('web')->logout();
        $this->redirect(session('url.intended', route('login')), navigate: true);
        session()->invalidate();
        session()->regenerateToken();
    }

    #[On('profileUpdated')]
    public function render(): View
    {
        return view('layouts.app-navigation');
    }
}
