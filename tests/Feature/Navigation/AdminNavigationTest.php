<?php

use App\Livewire\Layouts\AdminNavigation;
use App\Models\User;

it('renders admin navigation component successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(AdminNavigation::class)
        ->assertStatus(200);
});

it('can logout an user', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(AdminNavigation::class)
        ->call('logout')
        ->assertRedirect(route('login'))
        ->assertStatus(200);
});

it('can disable admin mode', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(AdminNavigation::class)
        ->call('disableAdminMode')
        ->assertRedirect(route('user.dashboard'))
        ->assertStatus(200);
});
