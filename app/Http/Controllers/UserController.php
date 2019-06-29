<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Eo;
use App\Booking;
use App\User;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return view('pages.login');
        }else{

            $user = Auth::user();
            $eos = Eo::where('user_id', $user->id)->first();
            if ($eos == null) {
                $id_eo = null;
                $bookings = Booking::where('id_user', $user->id)->get();
                $pemesan = null;
            }else {
                $id_eo = $eos->id;
                $bookings = Booking::where('id_eo', $id_eo)->get();
            }
            $data = DB::table('bookings')
            ->select(DB::raw('DATE_FORMAT(created_at, "%M %Y") as booking_month'), DB::raw('count(*) as bookings'))
            ->where('id_eo','=', $id_eo)
            ->orderBy('created_at', 'asc')
            ->groupBy('booking_month')
            ->get();

            // $data_graph = array();
            // array_push($data_graph,[
            //     $bookings[0]->created_at->format('m/Y'), 
                
            //     ]);
            // return $data;

            $d = json_encode($data);
            // return $d;
            
            return view('pages.dashboard', compact('user','eos', 'bookings', 'data'));
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
    public function store(Request $request)
    {
        //
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
    public function approve(Request $request, $id)
    {
        $booked = Booking::find($id);
        $booked->approval = 1;
        $booked->save();
        return redirect ('/user');
    }
    public function disapprove(Request $request, $id)
    {
        $booked = Booking::find($id);
        $booked->approval = 2;
        $booked->save();
        return redirect ('/user');
    }

}
