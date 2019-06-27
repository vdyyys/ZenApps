<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ManualTransaction;

class ManualTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('pages.pembayaran');
       //$user = Auth::user()->name;
       //return compact('user');
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
            if ($request->hasfile('bukti_transfer')) {
                    $nama_gambar = $request->bukti_transfer->getClientOriginalName();
                    $request->bukti_transfer->move(public_path().'/img/bukti_transfer/', $nama_gambar);
                    $user = Auth::user();
                    $buktis = new ManualTransaction();
                    $buktis->bukti_transfer = $nama_gambar;
                    $buktis->nama_bank = $request->nama_bank;
                    $buktis->nama_pengirim = $user->name;
                    $buktis->save();

                    return redirect ('/user');
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
