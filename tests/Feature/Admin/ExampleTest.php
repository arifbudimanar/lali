<?php

use App\Livewire\Admin\Example;

it('renders admin example component successfully', function () {
    Livewire::test(Example::class)
        ->assertStatus(200);
});
