<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Session;

class LaravelCrudStudent extends Controller
{
 
   public function stdntreg(){
        
        return view('stdntreg');

}

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
        $query = DB::table('students')->insert([
            
            'firstname'=> $request->input('firstname'),
            'middlename'=> $request->input('middlename'),
            'lastname'=> $request ->input('lastname'),
            'birthday'=> $request->input('birthday'),  
            'address'=> $request ->input('address'),
            'gender'=> $request ->input('gender'),
            'parentsguardianname'=> $request->input('parentsguardianname'),
            'parentsguardiannumber'=> $request ->input('parentsguardiannumber'),
            'courselist'=> $request ->input('courselist'),
            'mobilenumber'=> $request->input('mobilenumber')   
    
        ]);
        if($query){

            return back()->with('success', 'Successfully Inserted');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
   

}
}
  

