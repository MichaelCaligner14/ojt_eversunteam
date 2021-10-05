<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StdntRegController extends Controller
{
    //
    public function liststudents(){
        $data = array(
            'list' => DB::table('addstudents')->get()
        );  
        return view ("liststudents", $data);
    }
    function stdntreg(){
         
        return view('stdntreg');
    }

    function addingstud(Request $request){
       
        $request->validate([
            'first'=>'required',
            'middle'=>'required',
            'last'=>'required',
            'birthday'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'courselist'=>'required',
            'mobilenumber'=>'required',
            'parentsguardianname'=>'required',
            'parentsguardiannumber'=>'required'


        ]);

        $query = DB::table('addstudents')->insert([
            'first'=>$request->input('first'),
            'middle'=>$request->input('middle'),
            'last'=>$request->input('last'),
            'birthday'=>$request->input('birthday'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'courselist'=>$request->input('courselist'),
            'mobilenumber'=>$request->input('mobilenumber'),
            'parentsguardianname'=>$request->input('parentsguardianname'),
            'parentsguardiannumber'=>$request->input('parentsguardiannumber')

        ]);
        if($query){
            return back()->with('success', 'Successfully Inserted');
        }else{
            return back()->with('fail', 'Something Wrong');
        }


    }
   
}
