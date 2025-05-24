<?php

namespace App\Http\Controllers;

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
        return view('galeri.foto');
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
