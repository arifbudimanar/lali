<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.admin')]
    public function render(): View
    {
        session()->put('url.intended', route('admin.dashboard'));

        $latest_created_users = User::latest()->take(4)->get();
        $latest_updated_users = User::whereColumn('created_at', '!=', 'updated_at')->latest('updated_at')->take(4)->get();
        $total_users = User::count();
        $total_verified_users = User::where('email_verified_at', '!=', null)->count();
        $total_unverified_users = User::where('email_verified_at', null)->count();
        $total_register_last_month = User::where('created_at', '>=', now()->subMonth())->count();

        return view('livewire.admin.dashboard', compact(
            'latest_created_users',
            'latest_updated_users',
            'total_users',
            'total_verified_users',
            'total_unverified_users',
            'total_register_last_month'
        ));
    }
}
