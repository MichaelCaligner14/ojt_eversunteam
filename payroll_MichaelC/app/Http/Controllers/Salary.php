<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Salary extends Controller
{
    
    public function salary(){
        $cust = DB::table('empdeductionsalary')->count();
        $data = DB::table('empattendance')
        ->join('empdeductionsalary', 'empdeductionsalary.empattendance_id', '=','empattendance.id')
        ->select('empdeductionsalary.id','empattendance.rate','empattendance.initialamount','empdeductionsalary.empattendance_id','empdeductionsalary.deductionAmount')
        ->get();

      return view('salary',compact('data','cust'));
                
    }
    public function addsalary(Request $request){

        $request->validate([
            'empattendance_id'=>'required',
            'typeDeduction'=>'required',
            'deductionAmount'=>'required',
           
         
        ]);
        $query = DB::table('empdeductionsalary')->insert([
            'empattendance_id'=>$request->input('empattendance_id'),
            'typeDeduction'=>$request->input('typeDeduction'),
            'deductionAmount'=>$request->input('deductionAmount'),
        

        ]);
        
        if($query){
            return back()->with('success', 'Saved successfully!');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
}
