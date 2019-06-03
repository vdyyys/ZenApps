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
    public function storeEo(Request $request)
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

    public function storePaket(Request $request)
    {
        $validator = $this->validate($request, [
            'gambar_paket' => 'required',
            'gambar_paket.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_paket' => 'required|min:5',
            'kategori' => 'required',
            'available'=> 'required',
            'dekripsi' => 'required'
        ]);
        if ($validator) {
            if ($request->hasfile('gambar_paket')) {
                foreach ($request->file('gambar_paket') as $image ) {
                    $nama_gambar = $gambar->getClientOriginalName();
                    $image->move(public_path().'/img/gambar_paket/', $nama_gambar);
                    $data[] = $nama_gambar;
                }
            }
            $user = Auth::user();
            $user_eo = Eo::find($user->id);
            $pakets = new Paket();
            $pakets->id_eo = $user_eo->id;
            $pakets->gambar_paket = implode("|",$data);
            $pakets->nama_paket = $request->nama_paket;
            $pakets->kategori = $request->kategori;
            $pakets->available = 1;
            $pakets->deskripsi = $request->deskripsi;
            $pakets->harga_paket = $request->harga_paket;
            $pakets->save();
            return redirect('profile/'.str_replace(' ','',$user_eo->nama_eo));
        }else{
            return Redirect::back()->withErrors($validator)->withInput($request->all());
        }
    }

    public function changeAvailability($id)
    {
        $pakets = Paket::find($id);
        $pakets->available = 0;
        $pakets->save();
        
        return redirect('dashboard')
    }

    public function detilPaket($id)
    {
        $paket = Paket::find($id)->first();

        $eo = Eo::where('id', $paket->id_eo)->first();

        return view('pages.detail_paket', compact('paket','eo'));

    }




}
