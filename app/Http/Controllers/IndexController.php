<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eo;

class IndexController extends Controller
{
    public function index()
    {
        $eo = Eo::inRandomOrder()->take(4)->get();
        //$nama_eo =$eo[0]->nama_eo;
        return view('pages.index', compact('eo'));
    }
}
