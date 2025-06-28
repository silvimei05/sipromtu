<?php

namespace App\Http\Controllers;

use App\Models\FotoAktivitas;
use App\Models\VideoAktivitas;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display the photo gallery.
     *
     * @return \Illuminate\View\View
     */
    public function foto()
    {
        $fotos = FotoAktivitas::all();
        return view('galeri.foto', compact('fotos'));
    }

    /**
     * Display the video gallery.
     *
     * @return \Illuminate\View\View
     */
    public function video()
    {
        $videos = VideoAktivitas::all(['link']);

        $videos = $videos->map(function ($video) {
            $videoId = '';

            if (strpos($video->link, 'youtube.com/watch') !== false) {
                parse_str(parse_url($video->link, PHP_URL_QUERY), $query);
                $videoId = $query['v'] ?? '';
            }

            elseif (strpos($video->link, 'youtu.be') !== false) {
                $path = parse_url($video->link, PHP_URL_PATH);
                $videoId = trim($path, '/');
            }

            // Set embed URL
            $video->embed_url = $videoId ? "https://www.youtube.com/embed/{$videoId}?rel=0" : null;

            return $video;
        });

        return view('galeri.video', compact('videos'));
    }
}
