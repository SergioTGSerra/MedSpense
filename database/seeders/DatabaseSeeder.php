<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'user_id' => Str::uuid(),
            'name' => 'Sergio Serra',
            'email' => 'sergioserra.2003@gmail.com',
            'nif' => fake()->unique()->randomNumber(9),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'user_type' => 'Admin',
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
            'phone_number' => '123-456-7890',
            'address' => '123 Main St',
            'emergency_contact' => 'Jane Doe (123-789-4560)',
            'remember_token' => Str::random(10),
        ]);
    }
}
