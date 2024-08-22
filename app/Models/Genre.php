<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Menyatakan bahwa hanya kolom 'id' yang tidak bisa diisi secara massal
    protected $guarded = ['id'];

    // Relasi ke tabel films (satu genre memiliki banyak film)
    public function film()
    {
        return $this->hasMany(Film::class);
    }



}
