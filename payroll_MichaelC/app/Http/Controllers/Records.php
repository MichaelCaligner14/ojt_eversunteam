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
                            'empadd.name','empattendance.rate','empattendance.workdays',
                            'empattendance.empAdd_id','empattendance.initialamount',)
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
        
        public function deleterecord($id){
            $delete = DB::table('empAttendance')
                    ->where('empAdd_id', $id)
                    ->delete();
                    return redirect('records');
        }
}
