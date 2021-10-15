<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LoanRequest;

class LoanRequestController extends Controller
{
    public function addLoan(Request $request){

        $request -> validate([
            'borrowers_id' => 'required|unique:loans',
            'loanAmount' => 'required',
            'loanType' => 'required',
            'loanMonth' => 'required',
            'loanInterest' => 'required',
            'loanPurpose' => 'required',
            'totalAmount' => 'required',
            'monthlyPay' => 'required',
            'loanrqStatus' => 'required',
            'status' => 'required'
           ]);

        $query = DB::table('loan_requests')->insert([
            'borrowers_id'=>$request->input('borrowers_id'),
            'loanType'=>$request->input('loanType'),
            'loanAmount'=>$request->input('loanAmount'),        
            'loanMonth'=>$request->input('loanMonth'),   
            'loanInterest'=>$request->input('loanInterest'),
            'loanPurpose'=>$request->input('loanPurpose'),
            'totalAmount' =>$request->input('totalAmount'),
            'monthlyPay'=>$request->input('monthlyPay'),
            'loanrqStatus'=>$request->input('loanrqStatus'),
            'status'=>$request->input('status')
        ]);
        if($query){
            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    public function loan(){
        return view("components.loan");
    }
    
    public function editloan($id){
        $row = DB::table('loan_request')
                ->where('id',$id)
                ->first();
        $data = [
            'info' => $row
        ];

        return view('components.editLoan',$data);
    }
    public function updateLoan(Request $request){
        
        $request -> validate([
         'borrowers_id' => 'required',
         'loanType' => 'required',
         'loanAmount' => 'required',
         'loanMonth' => 'required',
         'loanInterest' => 'required',
         'loanPurpose' => 'required',
         'totalAmount' => 'required',
         'monthlyPay' => 'required',
         'loanrqStatus' => 'required',
         'status'     => 'required'
        ]);
 
        $updating = DB::table('loan_request')
                     ->where('id',$request->input('lid'))
                     ->update([
                         'borrowers_id'=>$request->input('borrowers_id'),
                         'loanType'=>$request->input('loanType'),
                         'loanAmount'=>$request->input('loanAmount'),
                         'loanMonth'=>$request->input('loanMonth'),   
                         'loanInterest'=>$request->input('loanInterest'),
                         'loanPurpose'=>$request->input('loanPurpose'),
                         'totalAmount'=>$request->input('totalAmount'),   
                         'monthlyPay'=>$request->input('monthlyPay'),
                         'loanrqStatus'=>$request->input('loanrqStatus'),
                         'status'=>$request->input('status')
                     ]);
         return redirect('loanreport');
     } 
     public function deleteLoan($id){
        
        $delete = DB::table('loan_request')
                ->where('id', $id)
                ->delete();
            return redirect('loanreport');
    } 
}
