<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

// Home Menu
Route::get('/halaman-utama', [HomeController::class, 'index'])->name('home');

// Profil Menu
Route::get('/sambutan-kepala-sekolah', [ProfilController::class, 'sambutanKepalaSekolah'])->name('profil.sambutan_kepala_sekolah');
Route::get('/guru', [ProfilController::class, 'guru'])->name('profil.guru');
Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('profil.visiMisi');
Route::get('/fasilitas', [ProfilController::class, 'fasilitas'])->name('profil.fasilitas');
Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('profil.sejarah');

// Berita Menu
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');

// Galeri Menu
Route::get('/foto', [GaleriController::class, 'foto'])->name('galeri.foto');
Route::get('/video', [GaleriController::class, 'video'])->name('galeri.video');

// Info Menu
Route::get('/info', [InfoController::class, 'ppdb'])->name('ppdb');

// Kontak Menu
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');