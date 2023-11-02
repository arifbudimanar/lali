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
        User::factory(199)->create(
            [
                'created_at' => fake()->dateTimeBetween('-2 month', 'now'),
                'updated_at' => fake()->dateTimeBetween('-1 month', 'now'),
            ]
        );
        User::factory(28)->unverified()->create(
            [
                'created_at' => fake()->dateTimeBetween('-2 month', 'now'),
                'updated_at' => fake()->dateTimeBetween('-1 month', 'now'),
            ]
        );
    }
}
