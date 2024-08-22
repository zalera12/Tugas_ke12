<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function filmByPeran(){
        return $this->belongsToMany(Film::class,"peran");
    }

}
