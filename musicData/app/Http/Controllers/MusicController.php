<?php

namespace App\Http\Controllers;

use App\Models\Album;

class MusicController extends Controller
{
    public function albumsList()
    {
        $albums = Album::orderBy('name')->get();

        return view('albums.index', compact('albums'));
    }

    public function showAlbum(Album $album)
    {
        $album->load(['songs' => function ($query) {
            $query->orderBy('NoAlbum');
        }]);

        return view('albums.show', compact('album'));
    }
}
