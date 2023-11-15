<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            User::factory()->create([
                'created_at' => fake()->dateTimeBetween('-3 month', '-1 week'),
                'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
            ]);
        }

        for ($i = 0; $i < 200; $i++) {
            User::factory()->unverified()->create([
                'created_at' => fake()->dateTimeBetween('-3 month', '-1 week'),
                'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
            ]);
        }
    }
}
