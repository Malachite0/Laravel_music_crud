<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\MusicData;
use Illuminate\Http\Request;

class MusicDataController extends Controller
{
    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'noalbum' => 'required|integer',
            'duration' => 'required',
            'album_name' => 'required',
            'artist' => 'required',
            'release_date' => 'required|date',
        ]);

        $album = Album::firstOrCreate([
            'name' => $request->album_name,
            'artist' => $request->artist,
            'release_date' => $request->release_date
        ]);

        MusicData::create([
            'title' => $request->title,
            'noalbum' => $request->noalbum,
            'duration' => $request->duration,
            'album_id' => $album->id
        ]);

        return redirect()->route('music.create')->with('success', 'Song toegevoegd!');
    }

    public function edit(MusicData $song)
    {
        return view('music.edit', compact('song'));
    }

    public function update(Request $request, MusicData $song)
    {
        $request->validate([
            'title' => 'required',
            'noalbum' => 'required|integer',
            'duration' => 'required',
        ]);

        $song->update([
            'title' => $request->title,
            'noalbum' => $request->noalbum,
            'duration' => $request->duration,
        ]);

        return redirect()->route('albums.show', $song->album_id)->with('success', 'Song bijgewerkt!');
    }

    public function destroy(MusicData $song)
    {
        $album_id = $song->album_id;
        $song->delete();
        return redirect()->route('albums.show', $album_id)->with('success', 'Song verwijderd!');
    }
}
