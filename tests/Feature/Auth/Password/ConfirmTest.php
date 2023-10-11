<?php

use App\Livewire\Auth\Password\Confirm;
use App\Models\User;
use Livewire\Livewire;

it('renders confirm component successfully', function () {
    Livewire::test(Confirm::class)
        ->assertStatus(200);
});

it('can confirm with valid password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Confirm::class)
        ->set('password', 'password')
        ->call('confirmPassword')
        ->assertHasNoErrors();
});

it('can not confirm with invalid password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Confirm::class)
        ->set('password', 'wrong-password')
        ->call('confirmPassword')
        ->assertHasErrors();
});
