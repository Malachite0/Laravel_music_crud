<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\MusicData;
use Illuminate\Support\Carbon;

class MusicDataSeeder extends Seeder
{
    public function run(): void
    {
        $albums = [
            ['name' => 'Magical Cure Love Shot', 'artist' => 'Miku', 'release_date' => '2023-10-25'],
            ['name' => 'Milkshake Man', 'artist' => 'Go-Jo', 'release_date' => '2025-05-28'],
            ['name' => 'The color and shape', 'artist' => 'Foo Fighters', 'release_date' => '1999-11-02'],
            ['name' => 'Help Us Stranger', 'artist' => 'The Raconteurs', 'release_date' => '2019-06-21'],
        ];

        $albumsMap = [];

        foreach ($albums as $albumData) {
            $albumsMap[$albumData['name']] = Album::updateOrCreate(
                ['name' => $albumData['name'], 'artist' => $albumData['artist']],
                ['release_date' => $albumData['release_date']]
            );
        }

        $songs = [
            [
                'Title' => 'Magical Cure Love Shot',
                'album_id' => $albumsMap['Magical Cure Love Shot']->id,
                'NoAlbum' => 1,
                'Duration' => '3:30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => 'Milkshake Man',
                'album_id' => $albumsMap['Milkshake Man']->id,
                'NoAlbum' => 1,
                'Duration' => '4:05',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => 'My Hero',
                'album_id' => $albumsMap['The color and shape']->id,
                'NoAlbum' => 7,
                'Duration' => '4:20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => "Now That You're Gone",
                'album_id' => $albumsMap['Help Us Stranger']->id,
                'NoAlbum' => 17,
                'Duration' => '3:40',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Title' => 'Everlong',
                'album_id' => $albumsMap['The color and shape']->id,
                'NoAlbum' => 11,
                'Duration' => '4:10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($songs as $song) {
            MusicData::updateOrCreate(
                ['Title' => $song['Title'], 'album_id' => $song['album_id']],
                $song
            );
        }
    }
}
