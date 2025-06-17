<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\MusicDataController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/albums', [MusicController::class, 'albumsList'])->name('albums.list');
Route::get('/albums/{album}', [MusicController::class, 'showAlbum'])->name('albums.show');

Route::get('/music/create', [MusicDataController::class, 'create'])->name('music.create');
Route::post('/music', [MusicDataController::class, 'store'])->name('music.store');

// Edit, update, delete routes voor songs
Route::get('/music/{song}/edit', [MusicDataController::class, 'edit'])->name('music.edit');
Route::put('/music/{song}', [MusicDataController::class, 'update'])->name('music.update');
Route::delete('/music/{song}', [MusicDataController::class, 'destroy'])->name('music.destroy');
