<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddEmp;

class Employeelist extends Controller
{
   
    public function employee(){
       $data = array(
           'list'=> DB::table('add_emps')->get());
       return view('employee', $data);
    }
    public function add(Request $request){

        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'age'=>'required',
            'sex'=>'required',
            'rate'=>'required'
        ]);
        $query = DB::table('add_emps')->insert([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'age'=>$request->input('age'),
            'sex'=>$request->input('sex'),
            'rate'=>$request->input('rate')

        ]);
        if($query){
            return back()->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
    public function delete($id){
        $delete = DB::table('add_emps')
                ->where('id', $id)
                ->delete();
                return redirect('employee');
    }
    public function edit($id){
        $row = DB::table('add_emps')
                ->where('id',$id)
                ->first();
        $data = [
            'data' => $row,
            'Title'=>'Edit',
        ];
        return view('edit', $data);
    }
    public function update(Request $request){

        $updating = DB::table('add_emps')
                        ->where('id',$request->input('id'))
                        ->update([
                            'name'=>$request->input('name'),
                            'address'=>$request->input('address'),
                            'age'=>$request->input('age'),
                            'sex'=>$request->input('sex'),
                            'rate'=>$request->input('rate')
                        ]);
                        return redirect('employee');
    }



    public function attendance(){
        return view("attendance");
    }

    public function records(){
        return view("records");
    }
    public function salary(){
        return view("salary");
    }
}
