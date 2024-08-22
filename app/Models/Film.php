<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Menyatakan bahwa hanya kolom 'id' yang tidak bisa diisi secara massal
    protected $guarded = ['id'];

    // Relasi ke tabel genres (setiap film memiliki satu genre)
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function peranByCast(){
        return $this->belongsToMany(Cast::class,'peran');
    }

    public function userByKritik(){
        return $this->belongsToMany(User::class,"kritik");
    }


}
