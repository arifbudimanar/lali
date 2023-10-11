<?php

use App\Livewire\User\Profile;
use App\Models\User;
use Livewire\Livewire;

it('renders profile component successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class)
        ->assertStatus(200);
});

it('allows authenticated user to access profile page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->get(route('user.profile'));

    $response->assertStatus(200);
});

it('redirects unauthenticated user to login page when accessing profile page', function () {
    $response = $this->get(route('user.profile'));

    $response->assertRedirect(route('login'));
    $response->assertStatus(302);
});

it('can update profile information', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('name', 'User 1')
        ->set('email', $user->email)
        ->call('updateProfile')
        ->assertDispatched('profileUpdated')
        ->assertStatus(200);

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'User 1',
        'email' => $user->email,
    ]);

});

it('can update password when providing valid credentials', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('currentPassword', 'password')
        ->set('newPassword', 'new-password')
        ->set('newPasswordConfirmation', 'new-password')
        ->call('updatePassword')
        ->assertHasNoErrors('currentPassword', 'password')
        ->assertStatus(200);

    $this->assertTrue(Auth::attempt([
        'email' => $user->email,
        'password' => 'new-password',
    ]));
});

it('can not update password when providing invalid credentials', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('currentPassword', 'new-password')
        ->set('newPassword', 'password')
        ->set('newPasswordConfirmation', 'password')
        ->call('updatePassword')
        ->assertHasErrors('currentPassword', 'password')
        ->assertStatus(200);

    $this->assertFalse(Auth::attempt([
        'email' => $user->email,
        'password' => 'new-password',
    ]));
});

it('does not change email verification status when email address is unchanged', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('name', 'User 1')
        ->set('email', $user->email)
        ->call('updateProfile');

    $this->assertDatabaseHas('users', [
        'name' => 'User 1',
        'email' => $user->email,
        'email_verified_at' => $user->email_verified_at,
    ]);
});

it('can delete account when providing correct password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('password', 'password')
        ->call('deleteUser')
        ->assertStatus(200)
        ->assertRedirect(route('home'));

    $this->assertDatabaseMissing('users', [
        'id' => $user->id,
    ]);
});

it('cannot delete account when providing incorrect password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Profile\Edit::class, ['user' => $user])
        ->set('password', 'wrong-password')
        ->call('deleteUser')
        ->assertHasErrors(['password']);

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
    ]);
});
