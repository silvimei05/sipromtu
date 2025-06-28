<?php

namespace App\Http\Controllers;

use App\Models\FotoAktivitas;
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
        return view('galeri.video');
    }
}
