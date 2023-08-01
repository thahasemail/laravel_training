<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(100)->create();

        // User::create([
        //     'name' => 'Muhamad Thaha',
        //     'email' => "mthaha@gmail.com",
        //     'description' => "This is the description",
        //     'password' => "localhost"
        // ]);
        // User::create([
        //     'name' => 'Muhamad',
        //     'email' => "muhamad@gmail.com",
        //     'description' => "This is the description",
        //     'password' => "localhost"
        // ]);
        // User::create([
        //     'name' => 'Thaha',
        //     'email' => "thaha@gmail.com",
        //     'description' => "This is the description",
        //     'password' => "localhost"
        // ]);
    }
}
