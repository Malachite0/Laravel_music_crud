@extends('layouts.app')

@section('title', 'Voeg nieuwe song toe')

@section('content')
    <h1>Voeg een nieuwe song toe</h1>

    @if(session('success'))
        <p class="text-green-600">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('music.store') }}" class="space-y-4 mt-4">
        @csrf

        <h3 class="font-semibold">Song Info</h3>
        <input type="text" name="title" placeholder="Titel" required class="border p-2 w-full">
        <input type="number" name="noalbum" placeholder="Tracknummer in album" required class="border p-2 w-full">
        <input type="text" name="duration" placeholder="Duur (bijv: 3:45)" required class="border p-2 w-full">

        <h3 class="font-semibold mt-6">Album Info</h3>
        <input type="text" name="album_name" placeholder="Album naam" required class="border p-2 w-full">
        <input type="text" name="artist" placeholder="Artiest" required class="border p-2 w-full">
        <input type="date" name="release_date" placeholder="Releasedatum" required class="border p-2 w-full">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Toevoegen</button>
    </form>
@endsection
