<?php

use App\Livewire\Auth\PrivacyPolicy;

it('renders privacy policy component successfully', function () {
    Livewire::test(PrivacyPolicy::class)
        ->assertStatus(200);
});
