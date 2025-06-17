<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicData extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'album_id', 'noalbum', 'duration'];

    public function album()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }
}
