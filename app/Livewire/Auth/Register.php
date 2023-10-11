<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public string $name;

    public string $email;

    public string $password;

    public string $passwordConfirmation;

    public bool $acceptTermsAndPrivacy = false;

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', Password::defaults()],
            'passwordConfirmation' => ['required', 'same:password'],
            'acceptTermsAndPrivacy' => ['required', 'accepted'],
        ];
    }

    public function messages(): array
    {
        return [
            'acceptTermsAndPrivacy.accepted' => __('You must accept the Terms Of Service and Privacy Policy.'),
        ];
    }

    public function register(): void
    {
        $this->validate();
        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);
        event(new Registered($user));
        Auth::login($user, true);
        $this->redirect(route('user.dashboard'), navigate: true);
    }

    #[Layout('layouts.auth')]
    public function render(): View
    {
        return view('livewire.auth.register');
    }
}
