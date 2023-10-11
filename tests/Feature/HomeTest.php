<?php

use App\Livewire\Home;
use Livewire\Livewire;

it('renders home component successfully', function () {
    Livewire::test(Home::class)
        ->assertStatus(200);
});
