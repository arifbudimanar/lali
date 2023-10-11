<?php

use App\Livewire\Auth\Login;
use App\Models\User;
use Livewire\Livewire;

it('renders login component successfully', function () {
    Livewire::test(Login::class)
        ->assertStatus(200);
});

it('redirects authenticated user to home page when accessing login page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('login'));

    $response->assertStatus(302);
    $response->assertRedirect(route('home'));
});

it('allows users to log in with valid credentials', function () {
    $user = User::factory()->create();

    Livewire::test(Login::class)
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login')
        ->assertRedirect(route('user.dashboard'))
        ->assertStatus(200);

    $this->assertAuthenticatedAs($user);
});

it('does not allow users to log in with invalid credentials', function () {
    $user = User::factory()->create();

    Livewire::test(Login::class)
        ->set('email', $user->email)
        ->set('password', 'wrong-password')
        ->call('login');

    $this->assertGuest();
});
