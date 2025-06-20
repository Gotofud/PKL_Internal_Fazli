<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => true,
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Fazli',
            'email' => 'fazli@example.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Mie Ayam',
            'email' => 'mieayam@example.com',
            'password' => bcrypt('12345678'),
        ]);
        User::create([
            'name' => 'Pajli',
            'email' => 'pajli@example.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
