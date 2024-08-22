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
        Schema::create('kritik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Kolom kunci asing untuk user
            $table->foreignId('film_id')->constrained()->onDelete('cascade'); // Kolom kunci asing untuk film
            $table->text('content'); // Kolom untuk konten kritik
            $table->integer('point'); // Kolom untuk penilaian kritik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik');
    }
};
