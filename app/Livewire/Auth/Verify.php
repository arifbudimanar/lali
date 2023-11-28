<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Verify extends Component
{
    public function logout(): void
    {
        Auth::guard('web')->logout();
        $this->redirect(session('url.intended', route('login')), navigate: true);
        if (session()->has('auth.password_confirmed_at')) {
            session()->forget('auth.password_confirmed_at');
        }
        session()->invalidate();
        session()->regenerateToken();
    }

    public function resend(): void
    {
        Auth::user()->sendEmailVerificationNotification();
        Toaster::success('A new verification link has been sent to the email address you provided in your profile settings.');
    }

    #[Layout('layouts.auth')]
    #[Title('Verify')]
    public function render(): View
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirect(session('url.intended', route('user.dashboard')), navigate: true);
            Toaster::success('Your email address already verified.');
        }

        return view('livewire.auth.verify');
    }
}
