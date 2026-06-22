<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan seeder master secara berurutan
        $this->call([
            UserSeeder::class,
            GuruSeeder::class,
            elemenKontenSeeder::class,
            topikMasterSeeder::class,
        ]);
    }
}