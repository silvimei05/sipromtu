<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the URL of the image.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
