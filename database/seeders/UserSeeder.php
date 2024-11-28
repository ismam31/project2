<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Sesuaikan dengan nama model lo
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Dummy User',
            'email' => 'dummy@example.com',
            'password' => Hash::make('kelompok7'), // Jangan lupa encrypt password
        ]);
    }
}

