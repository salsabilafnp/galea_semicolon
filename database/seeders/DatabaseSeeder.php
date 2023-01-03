<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
