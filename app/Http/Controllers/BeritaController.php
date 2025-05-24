<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display the berita page.
     *
     * @return \Illuminate\View\View
     */
    public function berita()
    {
        return view('berita.index');
    }
}
