<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //
    function subjects(){
        return view('subjects');
    }

    function addstudents(Request $request){

        $request -> validate([
            'first'=>'required',
            'middle'=>'required',
            'last'=>'required'
        ]);

        $query = DB::table('studentss')-> insert([
            'first'=>$request->input('first'),
            'middle'=>$request->input('middle'),
            'last'=>$request->input('last')
        ]);

        if($query){
            return back()->with('success', 'Successfully Inserted');
        }else{
            return back()->with('fail', 'Something Wrong');
        }

        
    
}
}