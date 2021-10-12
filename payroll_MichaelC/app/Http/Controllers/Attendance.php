<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Attendance extends Controller
{
    
    public function attendance(){
        return view("attendance");
    }
    public function addattendance(Request $request){

        $request->validate([
            'empAdd_id'=>'required',
            'hours'=>'required',
            'date'=>'required'
         
        ]);
        $query = DB::table('empattendance')->insert([
            'empAdd_id'=>$request->input('empAdd_id'),
            'hours'=>$request->input('hours'),
            'date'=>$request->input('date')
         

        ]);
        if($query){
            return back()->with('success', 'Saved successfully!');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
}
