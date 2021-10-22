<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Borrower;
use App\Models\LoanRequest;



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

    public function edit($id){

        $row = DB::table('borrowers')
               ->where('id',$id)
                ->first();
        $data = [
            'info' => $row
        ];
        return view ('components.edit',$data);
        
    }

    public function update(Request $request){
        
       $request -> validate([
        'fname' => 'required',
        'lname' => 'required',
        'mname' => 'required',
        'address' => 'required',
        'email' => 'required',
        'contactNo' => 'required|max:11'
       ]);

       $updating = DB::table('borrowers')
                    ->where('id',$request->input('cid'))
                    ->update([
                        'fname'=>$request->input('fname'),
                        'lname'=>$request->input('lname'),
                        'mname'=>$request->input('mname'),
                        'address'=>$request->input('address'),   
                        'email'=>$request->input('email'),
                        'contactNo'=>$request->input('contactNo')
                    ]);
        return redirect('borrowers');
    } 
    public function searchBorrower(Request $request){

        if($request->ismethod('post'))
        {
            $id=$request->get('id');
            $list = DB::table('borrowers') ->where('id', $request->input('id'))->paginate(5);
        }
        return view("components.borrowers",compact('list'));
    }   
    
    public function searchbyname(Request $request)
    {
        $name = DB::table('borrowers')
            ->where('id', $request->input('id'))
            ->first();

        return view("components.loan", compact('name'));
    }
   
    public function details($id){
        
        $row = DB::table('borrowers')
                ->join('loan_requests','borrowers.id','=','loan_requests.borrowers_id')
                ->select('borrowers.*','loan_requests.*')   
                ->where('borrowers.id',$id)
                ->first();
        $data = [
            'info' => $row
        ];

        // $data =  DB::table('borrowers')
        //        ->join('loan_requests','borrowers.id','=','loan_requests.borrowers_id')
        //           ->select('borrowers.*','loan_requests.*')
        //         ->get();
        
        return view('components.details', $data);
    }

    public function sample1(){
        return view('components.sample1');
    }

  

}
