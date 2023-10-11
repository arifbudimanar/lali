<?php

use App\Livewire\Auth\Password\Request;
use App\Models\User;
use Livewire\Livewire;

it('renders request component successfully', function () {
    Livewire::test(Request::class)
        ->assertStatus(200);
});

it('must enter an email address', function () {
    Livewire::test(Request::class)
        ->call('sendResetPasswordLink')
        ->assertHasErrors(['email' => 'required']);
});

it('must enter a valid email address', function () {
    Livewire::test(Request::class)
        ->set('email', 'invalid-email')
        ->call('sendResetPasswordLink')
        ->assertHasErrors(['email' => 'email']);
});

it('sent an email when provide valid email', function () {
    $user = User::factory()->create();
    Livewire::test(Request::class)
        ->set('email', $user->email)
        ->call('sendResetPasswordLink')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('password_reset_tokens', ['email' => $user->email]);
});
