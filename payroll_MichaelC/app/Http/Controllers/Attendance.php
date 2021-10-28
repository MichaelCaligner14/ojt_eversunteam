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
            'empAdd_id'=>'required|unique:empattendance',
            'datefrom'=>'required',
            'dateto'=>'required',
            'rate'=>'required',
            'absent'=>'required',
            'workdays'=>'required',
            'initialamount'=>'required',
         
        ]);
        $queryattendance = DB::table('empattendance')->insert([
            'empAdd_id'=>$request->input('empAdd_id'),
            'datefrom'=>$request->input('datefrom'),
            'dateto'=>$request->input('dateto'),
            'rate'=>$request->input('rate'),
            'absent'=>$request->input('absent'),
            'workdays'=>$request->input('workdays'),
            'initialamount'=>$request->input('initialamount'),
            'total_salary'=>$request->input('initialamount')
          
        ]);
        
        if($queryattendance){
            return back()->with('success', 'Saved successfully!');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
}
