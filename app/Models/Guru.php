<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['user_id', 'nama_guru', 'asal_sekolah'];

    // Relasi: Guru ini milik (terhubung ke) User siapa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Satu Guru bisa membuat Banyak Modul Ajar (1 to Many)
    public function modulAjars()
    {
        return $this->hasMany(ModulAjar::class);
    }
}
