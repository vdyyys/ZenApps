<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eo;
use App\Kategori;

class IndexController extends Controller
{
    public function index()
    {
        $eo = Eo::inRandomOrder()->limit(4)->get();
        $kategories = Kategori::all();
        // return $eo;
        return view('pages.index', compact('eo', 'kategories'));
        ($p->gambar_paket != null )? asset('img/gambarpaket/'.$p->gambar_paket) : asset('img/favicon.png') ;
    }
}
