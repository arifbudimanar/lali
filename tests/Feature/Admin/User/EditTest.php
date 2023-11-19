<?php

use App\Livewire\Admin\User\Edit;
use App\Models\User;

it('renders admin users edit component successfully', function () {
    $editUser = User::factory()->create();

    Livewire::test(Edit::class, ['user' => $editUser])
        ->assertStatus(200);
});

it('allows authenticated user with session auth.password_confirmed_at to access admin users edit page', function () {
    $user = User::factory()->create();

    $editUser = User::factory()->create();

    session()->put('auth.password_confirmed_at', time());

    $response = $this->actingAs($user)->get(route('admin.user.edit', $editUser));

    $response->assertStatus(200);
});

it('redirect authenticated user without session auth.password_confirmed_at to access admin users edit page', function () {
    $user = User::factory()->create();

    $editUser = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.user.edit', $editUser));

    $response->assertRedirect(route('password.confirm'));

    $response->assertStatus(302);
});

it('redirects unauthenticated user to login page when accessing admin users edit page', function () {
    $editUser = User::factory()->create();

    $response = $this->get(route('admin.user.edit', $editUser));

    $response->assertRedirect(route('login'));

    $response->assertStatus(302);
});

it('can update user when provided valid data', function () {
    $user = User::factory()->create();

    $editUser = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Edit::class, ['user' => $editUser])
        ->set('name', 'User Name')
        ->set('email', 'new@email.com')
        ->call('updateUser')
        ->assertHasNoErrors()
        ->assertRedirect(route('admin.user.show', $editUser))
        ->assertStatus(200);

    $this->assertDatabaseHas('users', [
        'id' => $editUser->id,
        'name' => 'User Name',
        'email' => 'new@email.com',
    ]);
});

it('can not update user when provided invalid data', function () {
    $user = User::factory()->create();

    $editUser = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Edit::class, ['user' => $editUser])
        ->set('name', 'User 1')
        ->set('email', 'invalidemail')
        ->call('updateUser')
        ->assertHasErrors(['email' => 'email'])
        ->assertStatus(200);

    $this->assertDatabaseHas('users', [
        'id' => $editUser->id,
        'name' => $editUser->name,
        'email' => $editUser->email,
    ]);
});
