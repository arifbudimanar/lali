<?php

use App\Livewire\User\Settings;
use App\Models\User;

it('renders profile component successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Settings\Edit::class)
        ->assertStatus(200);
});

it('can change languages', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Settings\Edit::class)
        ->set('selectedLanguage', 'id')
        ->call('updateLanguage')
        ->assertStatus(200);
});

it('only allows supported languages to be selected', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Settings\Edit::class)
        ->set('selectedLanguage', 'fr')
        ->call('updateLanguage')
        ->assertHasErrors(['selectedLanguage' => 'in'])
        ->assertStatus(200);
});
