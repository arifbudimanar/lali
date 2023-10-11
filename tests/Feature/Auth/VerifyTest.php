<?php

use App\Livewire\Auth\Verify;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Livewire\Livewire;

it('renders verify component successfully', function () {
    Livewire::test(Verify::class)
        ->assertStatus(200);
});

it('can resend verification email', function () {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    Livewire::actingAs($user)
        ->test(Verify::class)
        ->call('resend')
        ->assertStatus(200);
});

it('can verify', function () {
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    Auth::login($user);

    $url = URL::temporarySignedRoute('verification.verify', Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)), [
        'id' => $user->getKey(),
        'hash' => sha1($user->getEmailForVerification()),
    ]);

    Livewire::actingAs($user)
        ->test(Verify::class)
        ->call('resend', $url)
        ->assertStatus(200);

});
