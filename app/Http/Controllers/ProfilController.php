<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sambutanKepalaSekolah()
    {
        return view('profil.sambutan_kepala_sekolah');
    }

    public function visiMisi()
    {
        return view('profil.visi_misi');
    }

    public function guru()
    {
        return view('profil.guru');
    }

    public function sejarah()
    {
        return view('profil.sejarah');
    }

    public function fasilitas()
    {
        return view('profil.fasilitas');
    }


}
