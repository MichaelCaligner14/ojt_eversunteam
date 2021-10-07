<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReservationController extends Controller
{
    public function addReservation(){
        return view('reservationadd');
    }
    public function saveReservation(Request $request){
        DB::table('reservations')->insert([
            'date'=>$request->date,
            'pickup'=>$request->pickup,
            'destination'=>$request->destination,
            'time'=>$request->time,
        ]);

        return back()->with('reservation_add', 'Reservation added successfully!');
    }
    public function listReservation(){
        $reserves = DB::table('reservations')->get();
        return view('reservationlist', compact('reserves'));
    }
    public function editReservation($id){
        $reserve = DB::table('reservations')->where('id', $id)->first();
        return view('reservationedit', compact('reserve'));
    }
    public function updateReservation(Request $request){
        DB::table('reservations')->where('id', $request->id)->update([
            'date'=>$request->date,
            'pickup'=>$request->pickup,
            'destination'=>$request->destination,
            'time'=>$request->time,
        ]);
        return back()->with('reservation_update', 'Reservation updated successfully!');
    }
    public function cancelReservation($id){
        DB::table('reservations')->where('id', $id)->delete();
        return back()->with('reservation_cancel', 'Reservation cancelled successfully!');
    }
}
