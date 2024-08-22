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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Kolom untuk judul film
            $table->text('ringkasan'); // Kolom untuk ringkasan film
            $table->integer('tahun'); // Kolom untuk tahun rilis film
            $table->text('poster'); // Kolom untuk URL poster film
            $table->foreignId('genre_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
