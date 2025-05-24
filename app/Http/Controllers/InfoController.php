<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display the PPDB page.
     *
     * @return \Illuminate\View\View
     */
    public function ppdb()
    {
        return view('info_ppdb.index');
    }
}
