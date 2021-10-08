<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SubjectsController extends Controller
{
    //
    public function dashboard(){
        $data = array(
            'lists' => DB::table('subjects')->get()
        );  
        return view ("dashboard" , $data);
    }
    function subjects(){
        return view('subjects');
    }
    function addsubjects(Request $request){
        $request->validate([
            'subject'=> 'required',
            'description'=> 'required',
            'time'=> 'required',
            'section'=> 'required'
        ]);

        $query = DB::table('subjects')->insert([
            'subject'=>$request->input('subject'),
            'description'=>$request->input('description'),
            'time'=>$request->input('time'),
            'section'=>$request->input('section')
        ]);
        if($query){
            return back()->with('success', 'Successfully Inserted in Database');
        }else{
            return back()->with('fail', 'Something Wrong');
        }

    }
}
