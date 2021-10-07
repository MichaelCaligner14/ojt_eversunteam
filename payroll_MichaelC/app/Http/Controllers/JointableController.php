<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddEmp;
use App\Models\EmpAttendance;
class JointableController extends Controller
{
    public function records(){
    $data = AddEmp::join('emp_attendances', 'emp_attendances.addemps_id','=','add_emps.id')
                        ->get(['add_emps.id','add_emps.name','add_emps.rate','emp_attendances.hours']);
                      
    return view('records',compact('data'));
                    }
}
