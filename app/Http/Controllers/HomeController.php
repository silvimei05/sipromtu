<?php

namespace App\Http\Controllers;

use App\Models\VideoAktivitas;
use App\Models\FotoAktivitas;
use App\Models\Guru;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
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


        $fotos = FotoAktivitas::all()->map(function ($foto) {
            $foto->created_at = $foto->created_at ? Carbon::parse($foto->created_at)->format('d-m-Y') : null;
            return $foto;
        });

        $fourGurus = Guru::take(4)->get();

        return view('home', compact('videos', 'fotos', 'fourGurus'));
    }
}
