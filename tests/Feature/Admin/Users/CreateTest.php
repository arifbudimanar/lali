<?php

use App\Livewire\Admin\Users\Create;
use App\Models\User;

it('renders admin users create component successfully', function () {
    Livewire::test(Create::class)
        ->assertStatus(200);
});

it('allows authenticated user with session auth.password_confirmed_at to access admin users create page', function () {
    $user = User::factory()->create();

    session()->put('auth.password_confirmed_at', time());

    $response = $this->actingAs($user)->get(route('admin.users.create'));

    $response->assertStatus(200);
});

it('redirect authenticated user without session auth.password_confirmed_at to access admin users create page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.users.create'));

    $response->assertRedirect(route('password.confirm'));

    $response->assertStatus(302);
});

it('redirects unauthenticated user to login page when accessing admin users create page', function () {
    $response = $this->get(route('admin.users.create'));

    $response->assertRedirect(route('login'));

    $response->assertStatus(302);
});

it('can create new user when provided valid data', function () {
    Livewire::test(Create::class)
        ->set('name', 'User Name')
        ->set('email', 'user1@mail.com')
        ->call('createUser')
        ->assertHasNoErrors()
        ->assertRedirect(route('admin.users.index'))
        ->assertStatus(200);

    $this->assertDatabaseHas('users', [
        'name' => 'User Name',
        'email' => 'user1@mail.com',
    ]);
});

it('can not create new user when provided invalid data', function () {
    Livewire::test(Create::class)
        ->set('name', 'User 1')
        ->set('email', 'user1')
        ->call('createUser')
        ->assertHasErrors(['email' => 'email'])
        ->assertStatus(200);

    $this->assertDatabaseMissing('users', [
        'name' => 'User 1',
        'email' => 'user1',
    ]);
});
