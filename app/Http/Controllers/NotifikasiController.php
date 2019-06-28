<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Notifikasi;

class NotifikasiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        if (!Auth::check()) {
            return view('pages.login');
        }
        $user = Auth::user();
        $notifikasi = Notifikasi::where('id_receiver', $user->id)->get();
        return view('pages.notifikasi', compact('notifikasi'));
    }
    //notifikasi kalo user udah berhasil masukkin data dari cart ke table booking
    // ada dua notifikasi yg dibuat.
    // >> 1. berarti penerimanya eo, sendernya si user, pesannya kodenya 2
    // >> panggil id nitifikasinya.
    // => 2. berarti penerimanya user, sendenrya si system/? terus pesannya kodenya 1
    // => panggil id notifikasinya





    
}
