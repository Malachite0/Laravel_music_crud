<?php

namespace App\Http\Controllers;

use App\Models\Album;

class MusicController extends Controller
{
    public function albumsList()
    {
        // Alleen albums ophalen, zonder nummers
        $albums = Album::orderBy('name')->get();

        return view('albums.index', compact('albums'));
    }

    public function showAlbum(Album $album)
    {
        // Laad nummers van dit album, gesorteerd op NoAlbum
        $album->load(['songs' => function ($query) {
            $query->orderBy('NoAlbum');
        }]);

        return view('albums.show', compact('album'));
    }
}
