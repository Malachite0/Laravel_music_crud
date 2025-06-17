<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name', 'artist', 'release_date'];

    protected $casts = [
        'release_date' => 'datetime',
    ];

    // Relatie: een album heeft veel nummers (MusicData)
    public function songs()
    {
        return $this->hasMany(MusicData::class, 'album_id');
    }
}
