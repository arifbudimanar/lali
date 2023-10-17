<?php

use App\Livewire\User\Example;

it('renders user example component successfully', function () {
    Livewire::test(Example::class)
        ->assertStatus(200);
});
