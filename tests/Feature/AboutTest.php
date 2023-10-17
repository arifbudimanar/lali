<?php

use App\Livewire\About;

it('renders about component successfully', function () {
    Livewire::test(About::class)
        ->assertStatus(200);
});
