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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            // Menghubungkan lesson ke tabel courses (Relasi)
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); 
            
            $table->string('title'); // Judul materi
            $table->text('content')->nullable(); // Isi teks instruksi/materi
            $table->string('codepen_url')->nullable(); // Link CodePen interaktif
            $table->integer('order_number')->default(1); // Urutan bab materi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
