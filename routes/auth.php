<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Livewire\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/terms-of-service', Auth\TermsOfService::class)
    ->name('termsofservice');
Route::get('/privacy-policy', Auth\PrivacyPolicy::class)
    ->name('privacypolicy');

Route::middleware('auth')->group(function () {
    Route::get('/email/verify', Auth\Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');
    Route::get('/password/confirm', Auth\Password\Confirm::class)
        ->name('password.confirm');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', Auth\Login::class)
        ->name('login');
    Route::get('/register', Auth\Register::class)
        ->name('register');
    Route::get('/password/request', Auth\Password\Request::class)
        ->name('password.request');
    Route::get('/password/reset/{token}', Auth\Password\Reset::class)
        ->name('password.reset');
});
