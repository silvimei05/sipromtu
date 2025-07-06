<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
    ];

    public function getCreatedAtHumanAttribute()
    {
        return $this->created_at ? $this->created_at->diffForHumans() : null;
    }

    public function getCreatedAtInaFormatAttribute()
    {
        return $this->created_at ? $this->created_at->translatedFormat('l, d F Y') : null;
    }

}
