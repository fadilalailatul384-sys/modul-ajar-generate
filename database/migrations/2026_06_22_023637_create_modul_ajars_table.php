<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modul_ajars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus')->cascadeOnDelete();
            $table->foreignId('elemen_id')->constrained('elemen_kontens')->cascadeOnDelete();
            $table->foreignId('topik_master_id')->constrained('topik_masters')->cascadeOnDelete();

        // Kolom-kolom Informasi Modul Ajar
            $table->enum('status', ['draft', 'published'])->default('draft'); // Sesuaikan isi enum jika ada pilihan khusus
            $table->string('kelas');
            $table->string('semester');
            $table->string('tahun_pelajaran');
            $table->string('topik_materi');
            $table->integer('alokasi_waktu');
            $table->integer('jumlah_pertemuan');
            $table->string('model_pembelajaran');
            $table->string('target_peserta_didik');
            $table->text('tujuan_pembelajaran');

        // Kolom dengan tipe data JSON
            $table->json('metode_pembelajaran');
            $table->json('profil_pelajar_pancasila');
            $table->json('sarana_prasarana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_ajars');
    }
};
