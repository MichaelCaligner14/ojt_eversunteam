<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;
use Session;

class LaravelCrudStudent extends Controller
{


    public function studentUser(Request $request){
        $request->validate([
            'firstname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'birthday'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'parentsguardianname'=>'required',
            'parentsguardiannumber'=>'required',
            'courselist'=>'required',
            'subjectlist'=>'required',
            'mobilenumber'=>'required'
            

        ]);
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->parentsguardianname = $request->parentsguardianname;
        $student->parentsguardiannumber = $request->parentsguardiannumber;
        $student->courselist = $request->courselist;
        $student->mobilenumber = $request->mobilenumber;
        $res = $student->save();
        if($res){
            return back()->with('success','Registered successfully');
        } else{
            return back()->with('fail', 'Something Wrong');
        }
        
}
public function stdntreg(){
        return view("stdntreg");

}

  
}
