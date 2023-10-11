<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Verify extends Component
{
    public function logout(): void
    {
        Auth::guard('web')->logout();
        $this->redirect(session('url.intended', route('login')), navigate: true);
        session()->invalidate();
        session()->regenerateToken();
    }

    public function resend(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirect(route('user.dashboard'), navigate: true);
            session()->flash('status', __('Your email address has been verified.'));
        }
        Auth::user()->sendEmailVerificationNotification();
        session()->flash('resent');
    }

    #[Layout('layouts.auth')]
    public function render(): View
    {
        return view('livewire.auth.verify');
    }
}
