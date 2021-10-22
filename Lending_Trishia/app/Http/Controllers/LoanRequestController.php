<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LoanRequest;
use App\Models\LoanReports;
use App\Models\Borrower;


class LoanRequestController extends Controller
{

    public function addLoan(Request $request){

        $request -> validate([
            'borrowers_id' => 'required',
            'loanDate' => 'required',
            'loanAmount' => 'required',
            'loanType' => 'required',
            'loanMonth' => 'required',
            'loanInterest' => 'required',
            'loanPurpose' => 'required',
            'totalAmount' => 'required',
            'monthlyPay' => 'required'
           ]);

        $query = DB::table('loan_requests')->insert([
            'borrowers_id'=>$request->input('borrowers_id'),
            'loanDate'=>$request->input('loanDate'),
            'loanType'=>$request->input('loanType'),
            'loanAmount'=>$request->input('loanAmount'),        
            'loanMonth'=>$request->input('loanMonth'),   
            'loanInterest'=>$request->input('loanInterest'),
            'loanPurpose'=>$request->input('loanPurpose'),
            'totalAmount' =>$request->input('totalAmount'),
            'monthlyPay'=>$request->input('monthlyPay'),
        ]);
        if($query){
            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    
    
    public function editLoan($id){

        $row = DB::table('loan_requests')
               ->where('id',$id)
                ->first();
        $data = [
            'info' => $row
        ];
        return view ('components.editLoan',$data);
        
    }

    public function updateLoan(Request $request){
        
        $request -> validate([
         'borrowers_id' => 'required',
         'loanDate' => 'required',
         'loanType' => 'required',
         'loanAmount' => 'required',
         'loanMonth' => 'required',
         'loanInterest' => 'required',
         'loanPurpose' => 'required',
         'totalAmount' => 'required',
         'monthlyPay' => 'required'
        ]);
 
        $updating = DB::table('loan_requests')
                     ->where('id',$request->input('lid'))
                     ->update([
                         'borrowers_id'=>$request->input('borrowers_id'),
                         'loanDate'=>$request->input('loanDate'),
                         'loanType'=>$request->input('loanType'),
                         'loanAmount'=>$request->input('loanAmount'),
                         'loanMonth'=>$request->input('loanMonth'),   
                         'loanInterest'=>$request->input('loanInterest'),
                         'loanPurpose'=>$request->input('loanPurpose'),
                         'totalAmount'=>$request->input('totalAmount'),   
                         'monthlyPay'=>$request->input('monthlyPay')
                     ]);
         return redirect('pendingrq');
     } 
     public function deleteLoan($id){
        
        $delete = DB::table('loan_requests')
                ->where('id', $id)
                ->delete();
            return redirect('loanreport');
    } 

    public function loanform(){
            
        return view("components.loanform");
    }


    public function searchLoanRq(Request $request){

        if($request->ismethod('post'))
        {
            $id=$request->get('id');
            $data = DB::table('borrowers')
                            ->join('loan_requests','loan_requests.borrowers_id','=','borrowers.id')
                            ->select('borrowers.lname','borrowers.fname','borrowers.mname',
                            'loan_requests.id','loan_requests.loanDate','loan_requests.loanType','loan_requests.loanAmount',
                            'loan_requests.loanMonth','loan_requests.loanInterest','loan_requests.loanPurpose',
                            'loan_requests.totalAmount','loan_requests.monthlyPay',)
                            ->where('id', 'LIKE','%' .$id . '%')->paginate(5);
        }                       
        return view('components.pendingrq',compact('data'));
    }   
    
   
   
   
}
