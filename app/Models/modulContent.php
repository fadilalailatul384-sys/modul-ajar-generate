<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modulContent extends Model
{
    protected $table = 'modul_contents';
    protected $fillable = ['modul_id', 'generated_modul', 'perintah_revisi_terakhir'];

    // Relasi: Konten ini milik Modul Ajar yang mana
    public function modulAjar()
    {
        return $this->belongsTo(ModulAjar::class, 'modul_id');
    }
}
