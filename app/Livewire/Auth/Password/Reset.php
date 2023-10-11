<?php

namespace App\Livewire\Auth\Password;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Reset extends Component
{
    public ?string $token;

    public string $email;

    public string $password;

    public string $passwordConfirmation;

    public function mount($token): void
    {
        $this->email = request()->query('email', '');
        $this->token = $token;
    }

    public function rules(): array
    {
        return [
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string', PasswordRule::defaults()],
            'passwordConfirmation' => ['required', 'same:password'],
        ];
    }

    public function resetPassword(): void
    {
        $this->validate();
        $response = Password::broker()->reset([
            'token' => $this->token,
            'email' => $this->email,
            'password' => $this->password,
        ], function ($user, $password) {
            $user->password = Hash::make($password);
            $user->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
            Auth::guard()->login($user);
        });
        if ($response == Password::PASSWORD_RESET) {
            session()->flash('status', __($response));
            $this->redirect(route('user.dashboard'), navigate: true);
        }
        $this->addError('email', __($response));
    }

    #[Layout('layouts.auth')]
    public function render(): View
    {
        return view('livewire.auth.password.reset');
    }
}
