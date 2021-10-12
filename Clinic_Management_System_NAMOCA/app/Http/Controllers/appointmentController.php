<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appoint;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;


class appointmentController extends Controller
{
    public function appointment(){
    
        return view ('appointment');
    }

    public function appointPage(Request $request){

        $request -> validate([
        'fullname' => 'required',
        'purpose' => 'required',
        'time' => 'required',
        'date' => 'required'
        

        ]);
        $appoint = new Appoint();
        $appoint ->fullname = $request ->fullname;
        $appoint ->purpose = $request ->purpose;
        $appoint ->time = $request ->time;
        $appoint ->date = $request ->date;
      

        $res = $appoint ->save();
        if($res){
            return back() ->with('success','You have Appointment succesfully');
        }else {
            return back() ->with('fail','Something wrong');
        }

        
    }

    


}
