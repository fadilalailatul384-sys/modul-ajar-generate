<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil data user pak_toto yang baru dibuat tadi
        $user = User::where('username', 'pak_toto')->first();

        if ($user) {
            Guru::create([
                'user_id' => $user->id, // Mengambil ID dari user pak_toto
                'nama_guru' => 'Pak Toto, S.Kom., M.T.',
                'asal_sekolah' => 'Universitas Negeri',
            ]);
        }
    }
}