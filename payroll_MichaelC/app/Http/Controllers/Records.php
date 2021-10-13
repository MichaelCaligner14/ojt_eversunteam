<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Records extends Controller
{
    
    public function records(){
        $data = DB::table('empAdd')
                            ->join('empAttendance', 'empattendance.empAdd_id','=','empadd.id')
                            ->select('empadd.id','empadd.name','empadd.rate')
                            ->get();                 
        return view('records',compact('data'));
                        }
                      
    public function searchRecord(Request $request){
    
      
        if($request ->isMethod('post'))
        {
            $name=$request->get('name');
            $data= DB::table('empAdd')
            ->join('empAttendance','empattendance.empAdd_id','=','empadd.id')
            ->where('name', 'LIKE', '%' . $name . '%')->paginate(5);

        }
        return view('records', compact('data'));
        }
}
