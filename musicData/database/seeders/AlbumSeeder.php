<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        $albums = [
            [
                'name' => 'Magical Cure Love Shot',
                'artist' => 'Miku',
                'release_date' => '2023-10-25',
            ],
            [
                'name' => 'Milkshake Man',
                'artist' => 'Go-Jo',
                'release_date' => '2025-05-28',
            ],
            [
                'name' => 'The color and shape',
                'artist' => 'Foo Fighters',
                'release_date' => '1999-11-02',
            ],
            [
                'name' => 'Help Us Stranger',
                'artist' => 'The Raconteurs',
                'release_date' => '2019-06-21',
            ],

        ];

        foreach ($albums as $album) {
            Album::updateOrCreate(
                ['name' => $album['name'], 'artist' => $album['artist']],
                ['release_date' => $album['release_date']]
            );
        }
    }
}
