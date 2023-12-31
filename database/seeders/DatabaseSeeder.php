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
            'name' => 'User Example',
            'email' => 'user.example@mail.com',
            'created_at' => fake()->dateTimeBetween('-3 month', '-1 week'),
            'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
        ]);

        User::factory()->create([
            'name' => 'Admin Example',
            'email' => 'admin.example@mail.com',
            'created_at' => fake()->dateTimeBetween('-3 month', '-1 week'),
            'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
        ]);

        User::factory()->create([
            'name' => 'Arif Budiman Arrosyid',
            'email' => 'arifbudimanarrosyid@gmail.com',
            'created_at' => fake()->dateTimeBetween('-3 month', '-1 week'),
            'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
        ]);

        $this->call(UserSeeder::class);
    }
}
