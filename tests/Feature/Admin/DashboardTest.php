<?php

use App\Livewire\Admin\Dashboard;
use App\Models\User;

it('renders admin dashboard component successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Dashboard::class)
        ->assertStatus(200);
});

it('allows authenticated user with session auth.password_confirmed_at to access admin dashboard page', function () {
    $user = User::factory()->create();

    session()->put('auth.password_confirmed_at', time());

    $response = $this->actingAs($user)->get(route('admin.dashboard'));

    $response->assertStatus(200);
});

it('redirect authenticated user without session auth.password_confirmed_at to access admin dashboard page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.dashboard'));

    $response->assertRedirect(route('password.confirm'));

    $response->assertStatus(302);
});

it('redirects unauthenticated user to login page when accessing admin dashboard page', function () {
    $response = $this->get(route('admin.dashboard'));

    $response->assertRedirect(route('login'));

    $response->assertStatus(302);
});
