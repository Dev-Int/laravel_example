<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create(
            [
                'name' => 'Dupont',
                'email' => 'dupont@example.fr',
                'password' => bcrypt('pass'),
            ]
        );
    }
}
