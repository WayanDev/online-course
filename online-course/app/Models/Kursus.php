<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';

    protected $fillable = ['judul', 'deskripsi', 'durasi'];

    //Hubungan atau relasi ke tabel Materi dengan One to Many
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
