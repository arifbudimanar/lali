<?php

use App\Livewire\Admin\User\Show;
use App\Models\User;

it('renders admin users show component successfully', function () {
    $showUser = User::factory()->create();

    Livewire::test(Show::class, ['user' => $showUser])
        ->assertStatus(200);
});
it('allows authenticated user with session auth.password_confirmed_at to access admin users show page', function () {
    $user = User::factory()->create();

    $showUser = User::factory()->create();

    session()->put('auth.password_confirmed_at', time());

    $response = $this->actingAs($user)->get(route('admin.users.show', $showUser));

    $response->assertStatus(200);
});

it('redirect authenticated user without session auth.password_confirmed_at to access admin users show page', function () {
    $user = User::factory()->create();

    $showUser = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.users.show', $showUser));

    $response->assertRedirect(route('password.confirm'));

    $response->assertStatus(302);
});

it('redirects unauthenticated user to login page when accessing admin users show page', function () {
    $showUser = User::factory()->create();

    $response = $this->get(route('admin.users.show', $showUser));

    $response->assertRedirect(route('login'));

    $response->assertStatus(302);
});
