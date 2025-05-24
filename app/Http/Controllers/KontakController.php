<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display the kontak page.
     *
     * @return \Illuminate\View\View
     */
    public function kontak()
    {
        return view('kontak.index');
    }
}
