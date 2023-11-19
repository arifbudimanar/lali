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

Route::fallback(function () {
    abort(404);
});

Route::prefix('user')
    ->name('user.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/profile', User\Profile::class)->name('profile');
        Route::get('/settings', User\Settings::class)->name('settings');

        Route::middleware(['verified.email'])
            ->group(function () {
                Route::get('/dashboard', User\Dashboard::class)->name('dashboard');
                Route::get('/example', User\Example::class)->name('example');
            });
    });

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified.email', 'password.confirm'])
    ->group(function () {
        Route::get('/dashboard', Admin\Dashboard::class)->name('dashboard');
        Route::get('/example', Admin\Example::class)->name('example');

        Route::prefix('user')->name('user.')
            ->group(function () {
                Route::get('/', Admin\User\Index::class)->name('index');
                Route::get('/create', Admin\User\Create::class)->name('create');
                Route::get('/{user}', Admin\User\Show::class)->name('show');
                Route::get('/{user}/edit', Admin\User\Edit::class)->name('edit');
            });
    });

include __DIR__.'/auth.php';
