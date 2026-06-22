<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class topikMaster extends Model
{
    protected $table = 'topik_masters';
    protected $fillable = ['elemen_id', 'nama_topik', 'contoh_kegiatan'];

    // Mengonversi kolom JSON agar otomatis menjadi array di PHP
    protected $casts = [
        'contoh_kegiatan' => 'array',
    ];

    // Relasi: Topik ini milik Elemen Konten yang mana
    public function elemenKonten()
    {
        return $this->belongsTo(ElemenKonten::class, 'elemen_id');
    }
}
