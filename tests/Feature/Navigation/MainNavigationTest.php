<?php

use App\Livewire\Layouts\MainNavigation;
use App\Models\User;

it('renders main navigation component successfully', function () {
    Livewire::test(MainNavigation::class)
        ->assertStatus(200);
});

it('can logout an user', function () {
    $user = User::factory()->create();
    $this->be($user);

    Livewire::test(MainNavigation::class)
        ->call('logout')
        ->assertRedirect(route('login'))
        ->assertStatus(200);
});

it('can disable admin mode', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(MainNavigation::class)
        ->call('disableAdminMode')
        ->assertRedirect(route('user.dashboard'))
        ->assertStatus(200);
});
