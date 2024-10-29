<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash; 

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{protected static ?string $password;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'hanen',
            'email' => 'hanenfansa@gmail.com',
            'password'=>static::$password ??= Hash::make('123456789')
        ]);
    }
}
