<?php

use App\Livewire\User\Dashboard;
use App\Models\User;
use Livewire\Livewire;

it('renders dashboard component successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Dashboard::class)
        ->assertStatus(200);
});

it('allows authenticated user to access dashboard', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('user.dashboard'));

    $response->assertStatus(200);
});

it('redirects unauthenticated user to login page when accessing dashboard page', function () {
    $response = $this->get(route('user.dashboard'));

    $response->assertRedirect(route('login'));
    $response->assertStatus(302);
});
