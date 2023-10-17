<?php

use App\Livewire\Auth\TermsOfService;

it('renders terms of service component successfully', function () {
    Livewire::test(TermsOfService::class)
        ->assertStatus(200);
});
