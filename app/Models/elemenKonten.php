<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class elemenKonten extends Model
{
    protected $table = 'elemen_kontens'; // Kasih tahu Laravel nama tabelnya pakai 's' di belakang
    protected $fillable = ['nama_element', 'capaian_pembelajaran'];

    // Relasi: Satu Elemen memiliki Banyak Topik Master
    public function topikMasters()
    {
        return $this->hasMany(TopikMaster::class, 'elemen_id');
    }
}
