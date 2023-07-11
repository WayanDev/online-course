<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    
    protected $fillable = ['kursus_id', 'judul', 'deskripsi', 'link_embed'];

    //Hubungan atau relasi ke tabel Kursus
    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
