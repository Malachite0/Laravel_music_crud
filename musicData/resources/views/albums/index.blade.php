@extends('layouts.app')

@section('title', 'Albums')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Albums</h1>

    <table class="min-w-full border border-gray-300">
        <thead>
        <tr class="bg-gray-100">
            <th class="border px-4 py-2 text-left">Naam</th>
            <th class="border px-4 py-2 text-left">Artiest</th>
            <th class="border px-4 py-2 text-left">Actie</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr class="hover:bg-gray-50">
                <td class="border px-4 py-2">{{ $album->name }}</td>
                <td class="border px-4 py-2">{{ $album->artist }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('albums.show', $album->id) }}" class="text-blue-600 hover:underline">Bekijk nummers</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
