<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Eo;
use Auth;
class EoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eo = Eo::all();
        return view('pages.mitra', compact('eo'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return view('pages.login');
        }else{
            return view('pages.register_eo');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }else {
            if (Auth::user()->isEo()) {
                return redirect('/user');
            }else {
                $user = Auth::user();
                $eo = new Eo();
                $eo->user_id =$user->id;
                $eo->nama_eo = $request->nama_eo;
                $eo->email = $request->email;
                $eo->alamat = $request->alamat;
                $eo->kota = $request->kota;
                $eo->kontak = $request->kontak;
                $eo->link = $request->link;
                $eo->deskripsi = $request->deskripsi;
                $eo->save();
                $user->is_eo = 1;
                $user->save();
                
                return redirect('/user');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($eo)
    {
        if (!Auth::check()) {
            $user = null;
        }else {
            $user = Auth::user();
        }
        
        $eos = Eo::where('nama_eo', str_replace('_',' ',$eo))->first();
        $pakets = Paket::where('id_eo', $eos->id)->get();
        return view('pages.profil_eo', compact('user','eos', 'pakets')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
