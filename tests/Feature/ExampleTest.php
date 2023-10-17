<?php

use App\Livewire\Example;

it('renders example component successfully', function () {
    Livewire::test(Example::class)
        ->assertStatus(200);
});
