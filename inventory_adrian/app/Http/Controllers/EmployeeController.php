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
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required|min:12|max:12',
            'email'=>'required',
            'position'=>'required',
        ]);

        $query = DB::table('employees')->insert([
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
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

    public function empedit($id){
        $row = DB::table('employees')
                ->where('id',$id)
                ->first();
        $data = [
            'item' => $row,
        ];
        return view('empedit', $data);
    }

    public function empupdate(Request $request){

        $updating = DB::table('employees')
                        ->where('id',$request->input('empid'))
                        ->update([
                            'fname'=>$request->input('fname'),
                            'lname'=>$request->input('lname'),
                            'phone'=>$request->input('phone'),
                            'email'=>$request->input('email'),
                            'position'=>$request->input('position'),
                        ]);
                        return redirect('employee');
    }

    public function deletes($id){

        $delete = DB::table('employees')->where('id', $id)->delete();
        return redirect('employee');
    }
    
    public function cancel(){
        return redirect('employee');
    }
}
