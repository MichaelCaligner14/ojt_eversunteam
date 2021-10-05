<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Borrower;



class BorrowerController extends Controller
{
    public function borrowers(){
       $data = array(
           'list' =>DB::table('borrowers')->get()
       );
        return view('components.borrowers',$data);   
    }

    public function add(Request $request){

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contactNo' => 'required|max:11'
        ]);

        $query = DB::table('borrowers')->insert([
            'fname'=>$request->input('fname'),
            'lname'=>$request->input('lname'),
            'mname'=>$request->input('mname'),
            'address'=>$request->input('address'),   
            'email'=>$request->input('email'),
            'contactNo'=>$request->input('contactNo')

        ]);
        if($query){
            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }
     public function delete($id){
        
        $delete = DB::table('borrowers')
                ->where('id', $id)
                ->delete();
            return redirect('borrowers');
     } 


}
