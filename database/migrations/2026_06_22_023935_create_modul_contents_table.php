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
        Schema::create('modul_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modul_id')->constrained('modul_ajars')->cascadeOnDelete();
            $table->longText('generated_modul'); // longtext untuk menyimpan dokumen teks panjang
            $table->text('perintah_revisi_terakhir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_contents');
    }
};
