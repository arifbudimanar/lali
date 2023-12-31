<?php

use App\Livewire\Auth\Register;
use App\Models\User;
use Livewire\Livewire;

it('renders register component successfully', function () {
    Livewire::test(Register::class)
        ->assertStatus(200);
});

it('redirect authenticated user to home page when accessing register page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('register'));

    $response->assertStatus(302);
    $response->assertRedirect(route('home'));
});

it('registers a new user with valid data', function () {
    Artisan::call('migrate:fresh');
    Livewire::test(Register::class)
        ->set('name', 'New User')
        ->set('email', 'newuser@mail.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password')
        ->set('terms_of_service_and_privacy_policy', true)
        ->call('register')
        ->assertHasNoErrors()
        ->assertStatus(200);

    $this->assertDatabaseHas('users', [
        'name' => 'New User',
        'email' => 'newuser@mail.com',
    ]);
});

it('can not registers a new user with invalid data', function () {
    Artisan::call('migrate:fresh');
    Livewire::test(Register::class)
        ->set('name', 'New User')
        ->set('email', 'newuser@mail.com')
        ->set('password', 'pass')
        ->set('password_confirmation', 'wrongpassword')
        ->set('terms_of_service_and_privacy_policy', true)
        ->call('register')
        ->assertHasErrors('password', 'password_confirmation')
        ->assertStatus(200);

    $this->assertDatabaseMissing('users', [
        'name' => 'New User',
        'email' => 'newuser@mail.com',
    ]);
});
