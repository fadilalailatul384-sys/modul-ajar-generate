<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat data user untuk keperluan testing login
        User::create([
            'username' => 'pak_toto',
            'password' => Hash::make('password123'), // Password di-hash biar aman
        ]);
    }
}