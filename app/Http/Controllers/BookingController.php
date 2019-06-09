<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Eo;
use App\Booking;
use Auth;
class BookingController extends Controller
{
    function __construct()
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($paramIdPaket)
    {
        $paket = Paket::find($paramIdPaket)->first();
        $eo = Eo::where('id', $paket->id_eo );
        return view('pages.pemesanan', compact('paket', 'eo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->nama_paket as $pakets ) {
            $data[] = $pakets;
        }
        $lastBooking = App\Booking::orderBy('created_at', 'desc')->first();
        if (!$lastBooking) {
            $booking_number = str_pad(0,5,0,STR_PAD_LEFT);
        }else {
            $booking_number = str_pad($lastBooking->id - 1,5,0,STR_PAD_LEFT);
        }
        $tgl = Carbon\Carbon::now()->format('ym');
        
        $kode_booking = "ZEN".$tgl.$booking_number;
        $user = Auth::user();
        $paket = Paket::where('nama_paket', $data[0])->get();
        $eo = Eo::find($paket[0]->id_eo);
        $booking = new Booking();
        $booking->id_eo = $eo->id;
        $booking->nama_paket = implode(',',$data); 
        $booking->id_user = $user->id;
        $booking->kode_booking = $kode_booking;
        $booking->metode_pembayaran = $request->metode_pembayaran;
        // $booking->harga_total = $request->harga_total;
        $booking->save();
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
