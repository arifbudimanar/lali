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
            'name' => 'Example User',
            'email' => 'example@mail.com',
        ]);

        User::factory()->create([
            'name' => 'Contoh Pengguna',
            'email' => 'contoh@mail.com',
        ]);

        // $this->call(UserSeeder::class);
    }
}
