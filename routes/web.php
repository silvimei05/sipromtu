<?php

use App\Models\VideoAktivitas;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $videos = VideoAktivitas::all(['link']);

    $videos = $videos->map(function ($video) {
        $videoId = '';

        // Cek apakah link mengandung parameter ?v= (format YouTube biasa)
        if (strpos($video->link, 'youtube.com/watch') !== false) {
            parse_str(parse_url($video->link, PHP_URL_QUERY), $query);
            $videoId = $query['v'] ?? '';
        }

        // Cek apakah link dalam format youtu.be
        elseif (strpos($video->link, 'youtu.be') !== false) {
            $path = parse_url($video->link, PHP_URL_PATH);
            $videoId = trim($path, '/');
        }

        // Set embed URL
        $video->embed_url = $videoId ? "https://www.youtube.com/embed/{$videoId}?rel=0" : null;

        return $video;
    });

    return view('home', compact('videos'));
});

Route::get('/berita', fn() => view('berita.index'));
Route::get('/contact', fn() => view('kontak.index'));
Route::get('/home', fn() => view('home.index'));
Route::get('/gallery', fn() => view('galeri.index'));
Route::get('/about', fn() => view('About'));
