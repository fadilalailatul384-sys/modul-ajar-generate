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
        Schema::create('topik_masters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('elemen_id')->constrained('elemen_kontens')->cascadeOnDelete();
            $table->string('nama_topik'); 
            $table->json('contoh_kegiatan'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topik_masters');
    }
};
