<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public function employee()
    {
        $data = array(
            'list'=>DB::table('employees')->get()
        );
        return view('employee',$data);
    }

    public function addemp(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'position'=>'required',
        ]);

        $query = DB::table('employees')->insert([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'position'=>$request->input('position'),

        ]);
        if($query){
            return back()->with('success', 'Data have been save. ');
        }else{
            return back()->with('fail', 'Somrthing went wrong');
        }

    }

    public function edit($id){

        $row =DB::table('employees')->where('id',$id)
            ->first();
        $data = [
            'Info'=>$row
        ];

        return view('', $data);
    }
}
