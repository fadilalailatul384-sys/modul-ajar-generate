<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\elemenKonten;
use App\Models\topikMaster; // 't' kecil sesuai nama model kamu

class topikMasterSeeder extends Seeder
{
    public function run(): void
    {
        // Relasi ke elemen Berpikir Komputasional
        $elemen1 = elemenKonten::where('nama_element', 'Berpikir Komputasional')->first();
        if ($elemen1) {
            topikMaster::create([
                'elemen_id' => $elemen1->id,
                'nama_topik' => 'Pencarian (Searching) dan Pengurutan (Sorting)',
                'contoh_kegiatan' => [
                    'Bermain peran mensimulasikan algoritma Bubble Sort',
                    'Mencari buku di perpustakaan dengan metode Binary Search'
                ], // Otomatis tersimpan jadi JSON karena sudah di-cast array di model
            ]);
        }

        // Relasi ke elemen Algoritma dan Pemrograman
        $elemen2 = elemenKonten::where('nama_element', 'Algoritma dan Pemrograman')->first();
        if ($elemen2) {
            topikMaster::create([
                'elemen_id' => $elemen2->id,
                'nama_topik' => 'Struktur Kontrol Perulangan (Loops) Python',
                'contoh_kegiatan' => [
                    'Membuat program perulangan "For" untuk mencetak angka 1-10',
                    'Menganalisis logika perulangan "While" pada studi kasus quiz pemrograman'
                ],
            ]);
        }
    }
}