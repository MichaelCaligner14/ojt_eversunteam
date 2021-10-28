<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class Records extends Controller
{
    public function records(){
    

        $data = $data = DB::table('empadd') 
                            ->join('empattendance', 'empadd.id', '=', 'empattendance.empAdd_id')
                            ->select('empattendance.id','empattendance.empAdd_id',
                            'empadd.fname','empadd.lname','empattendance.rate','empattendance.workdays',
                            'empattendance.absent','empattendance.initialamount')
                            ->orderBy('empattendance.created_at', 'desc')
                            ->get();
                          


                                             
        return view('records',compact('data'));
                        }
                      
    public function searchRecord(Request $request){
    
      
        if($request ->isMethod('post'))
        {
            $lname=$request->get('lname');
            $data= DB::table('empAdd')
            ->join('empAttendance','empattendance.empAdd_id','=','empadd.id')
            ->select('empattendance.id','empattendance.empAdd_id',
                            'empadd.lname','empadd.fname','empattendance.rate','empattendance.workdays',
                            'empattendance.initialamount',)
            ->where('lname', 'LIKE', '%' . $lname . '%')->paginate(5);

        }
        return view('records', compact('data'));
        }
        
        public function deleterecord($id){
            $delete = DB::table('empAttendance')
                    ->where('empAdd_id', $id)
                    ->delete();
                    return redirect('records');
        }
}
