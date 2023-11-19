<?php

use App\Livewire\Admin\User\Index;
use App\Models\User;

it('renders admin users index component successfully', function () {
    Livewire::test(Index::class)
        ->assertStatus(200);
});

it('allows authenticated user with session auth.password_confirmed_at to access admin users index page', function () {
    $user = User::factory()->create();

    session()->put('auth.password_confirmed_at', time());

    $response = $this->actingAs($user)->get(route('admin.user.index'));

    $response->assertStatus(200);
});

it('redirect authenticated user without session auth.password_confirmed_at to access admin users index page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.user.index'));

    $response->assertRedirect(route('password.confirm'));

    $response->assertStatus(302);
});

it('redirects unauthenticated user to login page when accessing admin users index page', function () {
    $response = $this->get(route('admin.user.index'));

    $response->assertRedirect(route('login'));

    $response->assertStatus(302);
});

it('shows 10 paginated user data', function () {
    $users = User::factory(20)->create();

    Livewire::test(Index::class)
        ->set('paginate', 10)
        ->assertSee($users[0]->name)
        ->assertSee($users[9]->name)
        ->assertDontSee($users[10]->name)
        ->assertStatus(200);
});

it('can search by name or email', function () {
    $users = User::factory(20)->create();

    Livewire::test(Index::class)
        ->set('search', $users[0]->name)
        ->assertSee($users[0]->name)
        ->assertDontSee($users[1]->name)
        ->assertStatus(200);

    Livewire::test(Index::class)
        ->set('search', $users[0]->email)
        ->assertSee($users[0]->name)
        ->assertDontSee($users[1]->name)
        ->assertStatus(200);
});

it('can delete user', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Index::class)
        ->call('confirmUserDeletion', $user->id)
        ->call('deleteUser')
        ->assertStatus(200);

    $this->assertDatabaseMissing('users', [
        'id' => $user->id,
    ]);
});
