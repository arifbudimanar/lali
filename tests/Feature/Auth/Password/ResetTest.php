<?php

use App\Livewire\Auth\Password\Reset;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

it('renders reset component successfully', function () {
    $user = User::factory()->create();

    $token = Str::random(16);

    DB::table('password_reset_tokens')->insert([
        'email' => $user->email,
        'token' => Hash::make($token),
        'created_at' => Carbon::now(),
    ]);

    Livewire::test(Reset::class, ['token' => $token])
        ->assertSuccessful()
        ->assertStatus(200);
});

it('can reset password', function () {
    $user = User::factory()->create();

    $token = Str::random(16);

    DB::table('password_reset_tokens')->insert([
        'email' => $user->email,
        'token' => Hash::make($token),
        'created_at' => Carbon::now(),
    ]);

    Livewire::test(Reset::class, ['token' => $token])
        ->set('email', $user->email)
        ->set('password', 'secret-password')
        ->set('password_confirmation', 'secret-password')
        ->call('resetPassword')
        ->assertStatus(200);

    $this->assertTrue(Auth::attempt([
        'email' => $user->email,
        'password' => 'secret-password',
    ]));
});

it('require token', function () {
    Livewire::test(Reset::class, ['token' => null])
        ->call('resetPassword')
        ->assertHasErrors(['token' => 'required']);
});

it('require email', function () {
    Livewire::test(Reset::class, ['token' => Str::random(16)])
        ->call('resetPassword')
        ->assertHasErrors(['email' => 'required']);
});

it('require valid email', function () {
    Livewire::test(Reset::class, ['token' => Str::random(16)])
        ->set('email', 'invalid-email')
        ->call('resetPassword')
        ->assertHasErrors(['email' => 'email']);
});

it('require password', function () {
    Livewire::test(Reset::class, ['token' => Str::random(16)])
        ->set('password', '')
        ->call('resetPassword')
        ->assertHasErrors(['password' => 'required']);
});

it('require match password confirmation', function () {
    Livewire::test(Reset::class, ['token' => Str::random(16)])
        ->set('password', 'new-password')
        ->set('password_confirmation', 'invalid-new-password')
        ->call('resetPassword')
        ->assertHasErrors(['password_confirmation' => 'same:password']);
});
