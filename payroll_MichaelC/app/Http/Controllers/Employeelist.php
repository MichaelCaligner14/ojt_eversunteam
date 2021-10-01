<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
use App\Models\AddEmp;

class Employeelist extends Controller
{
   
    public function employee(){
       $data = array(
           'list'=> db::table('add_emps')->get());
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
        $query = db::table('add_emps')->insert([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'age'=>$request->input('age'),
            'sex'=>$request->input('sex'),
            'rate'=>$request->input('rate')

        ]);
        if($query){
            return back()->with('success', 'You have registered successfuly');
        } else{
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
            'Info' => $row,
            'Title'=>'Edit',
        ];
        return view('edit', $data);
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
