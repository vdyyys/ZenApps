<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Eo;
use Auth;
class EoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $eo = new Eo();
        $eo->user_id =$user->id;
        $eo->nama_eo = $request->nama_eo;
        $eo->email = $request->email;
        $eo->alamat = $request->alamat;
        $eo->kontak = $request->kontak;
        $eo->link = $request->link;
        $eo->save();
        
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eos = Eo::find($id)->first();
        $pakets = Paket::where('id_eo', $eos->id)->get();
        return view('pages.profil_eo', compact('eos', 'pakets')); 
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
