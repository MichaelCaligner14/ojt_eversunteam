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
            'datefrom'=>'required',
            'dateto'=>'required',
            'absent'=>'required',
            'workdays'=>'required'
         
        ]);
        $query = DB::table('empattendance')->insert([
            'empAdd_id'=>$request->input('empAdd_id'),
            'datefrom'=>$request->input('datefrom'),
            'dateto'=>$request->input('dateto'),
            'absent'=>$request->input('absent'),
            'workdays'=>$request->input('workdays')
        

        ]);
        
        if($query){
            return back()->with('success', 'Saved successfully!');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
}
