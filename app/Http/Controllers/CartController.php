<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eo;
use App\Cart;
use App\Paket;
use Auth;
class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pages.cart');
        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            $user = Auth::user();
            $carts = Cart::where('id_user', $user->id)->get();
            if($carts->count() != 0)
            {
                foreach ($carts as $cart ) {
                    $pakets = Paket::where('id', $cart->id_paket)->get();
                    return view('pages.cart', compact('pakets'));
                }
            }else {
                $pakets = [];
                return view('pages.cart', compact('pakets'));
            }
        }
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
    public function store(Request $request, $nama_paket)
    {
      if (!Auth::check()) {
        return view('pages.login');
      }else {
        $user = Auth::user();
        $paket = Paket::where('nama_paket',str_replace('_',' ',$nama_paket))->first();
        $eo = Eo::where('id',$paket->id_eo)->first();
        $cart = new Cart();
        $cart->id_paket = $paket->id;
        $cart->id_user = $user->id;
        $cart->id_eo = $eo->id;
        $cart->save();
        return redirect()->route('cart');
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
