<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eo;

class IndexController extends Controller
{
    public function index()
    {
        $eo = Eo::inRandomOrder()->limit(4)->get();
        // return $eo;
        return view('pages.index', compact('eo'));
    }
}
