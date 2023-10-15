<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Arif Budiman Arrosyid',
            'email' => 'arifbudimanarrosyid@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'User 1',
            'email' => 'user1@user.com',
        ]);
        User::factory()->create([
            'name' => 'User 2',
            'email' => 'user2@user.com',
        ]);

        $this->call(UserSeeder::class);
    }
}
