@extends('layouts.app')

@section('title', 'Song bewerken')

@section('content')
    <h1>Song bewerken</h1>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('music.update', $song->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="Titel" value="{{ old('title', $song->title) }}" required>
        <input type="number" name="noalbum" placeholder="Tracknummer in album" value="{{ old('noalbum', $song->noalbum) }}" required>
        <input type="text" name="duration" placeholder="Duur (bijv: 3:45)" value="{{ old('duration', $song->duration) }}" required>

        <button type="submit" class="mt-4 px-4 py-2 bg-green-600 text-white rounded">Opslaan</button>
    </form>
@endsection
