@extends('layouts.app')

@section('title', $album->name)

@section('content')
    <h1 class="text-3xl font-bold mb-4">{{ $album->name }}</h1>
    <p><strong>Artiest:</strong> {{ $album->artist }}</p>
    <p><strong>Release datum:</strong> {{ $album->release_date ? $album->release_date->format('d-m-Y') : '-' }}</p>

    @if(session('success'))
        <p class="text-green-600 mt-4">{{ session('success') }}</p>
    @endif

    <h2 class="text-2xl mt-6 mb-2">Nummers</h2>
    @if($album->songs->isEmpty())
        <p>Geen nummers gevonden.</p>
    @else
        <ul class="list-disc pl-5 space-y-2">
            @foreach($album->songs as $song)
                <li>
                    {{ $song->NoAlbum }}. {{ $song->Title }} ({{ $song->Duration ?? '-' }})
                    <a href="{{ route('music.edit', $song) }}" class="text-blue-600 ml-4 hover:underline">Edit</a>

                    <form method="POST" action="{{ route('music.destroy', $song) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Weet je het zeker?')" class="text-red-600 ml-2 hover:underline">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('albums.list') }}" class="mt-4 inline-block text-blue-600 hover:underline">Terug naar albums</a>
@endsection
