<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }


    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('berita.detail', compact('berita'));
    }


}
