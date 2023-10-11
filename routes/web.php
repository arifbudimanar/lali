<?php

use App\Livewire\Admin;
use App\Livewire\Example;
use App\Livewire\Home;
use App\Livewire\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/example', Example::class)->name('example');

Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/profile', User\Profile\Edit::class)->name('profile');
        Route::middleware(['verified.email'])->group(function () {
            Route::get('/dashboard', User\Dashboard::class)->name('dashboard');
            Route::get('/settings', User\Settings\Edit::class)->name('settings');
            Route::get('/example', User\Example::class)->name('example');
        });
    });
    Route::prefix('admin')->name('admin.')->middleware(['verified.email', 'password.confirm'])->group(function () {
        Route::get('/dashboard', Admin\Dashboard::class)->name('dashboard');
        Route::get('/example', Admin\Example::class)->name('example');
    });
});

include __DIR__.'/auth.php';
