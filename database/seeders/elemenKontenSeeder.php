<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\elemenKonten; // 'e' kecil sesuai nama model kamu

class elemenKontenSeeder extends Seeder
{
    public function run(): void
    {
        elemenKonten::create([
            'nama_element' => 'Berpikir Komputasional',
            'capaian_pembelajaran' => 'Pada akhir fase E, peserta didik mampu menerapkan strategi algoritmik standar untuk menghasilkan beberapa solusi dalam menyelesaikan persoalan.',
        ]);

        elemenKonten::create([
            'nama_element' => 'Algoritma dan Pemrograman',
            'capaian_pembelajaran' => 'Pada akhir fase E, peserta didik mampu memahami konsep strategi algoritmik, struktur data, dan pemrograman prosedural.',
        ]);
    }
}