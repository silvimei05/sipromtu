<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
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
        $infos = Ppdb::all();
        return view('info_ppdb.index', compact('infos'));
    }
}
