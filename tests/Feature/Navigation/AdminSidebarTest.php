<?php

use App\Livewire\Layouts\AdminSidebar;
use App\Models\User;

it('renders admin sidebar component successfully', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(AdminSidebar::class)
        ->assertStatus(200);
});

it('can logout an user', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(AdminSidebar::class)
        ->call('logout')
        ->assertRedirect(route('login'))
        ->assertStatus(200);
});

it('can disable admin mode', function () {
    $user = User::factory()->create();

    $this->be($user);

    Livewire::test(AdminSidebar::class)
        ->call('disableAdminMode')
        ->assertRedirect(route('user.dashboard'))
        ->assertStatus(200);
});
