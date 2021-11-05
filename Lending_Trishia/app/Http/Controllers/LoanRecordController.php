<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\LoanReports;
use App\Models\LoanRequest;



class LoanRecordController extends Controller
{
    public function addApprove(Request $request){

        $request->validate([
            'loanrequest_id' => 'required',
            'approveDate' => 'required',
            'loanBalance' => 'required',
            'approveStatus' => 'required'
        ]);

        $query = DB::table('loan_reports')->insert([
            'loanrequest_id'=>$request->input('loanrequest_id'),
            'approveDate'=>$request->input('approveDate'),
            'loanBalance'=>$request->input('loanBalance'),
            'approveStatus'=>$request->input('approveStatus')
        ]);
        if($query){
            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }
    public function loanreport(Request $request){
        $data = LoanRequest::join('loan_reports','loan_reports.loanrequest_id','=','loan_requests.id')
                        ->get(['loan_reports.*','loan_requests.loanType','loan_requests.totalAmount']);

        return view('components.loanreport', compact('data'));
    }

    public function pendingrq(Request $request){
        $data = Borrower::join('loan_requests','loan_requests.borrowers_id','=','borrowers.id')
                        ->whereNull('deleted_at')
                        ->get(['loan_requests.id','borrowers.lname','borrowers.fname','borrowers.mname',
                        'loan_requests.loanType','loan_requests.loanDate','loan_requests.loanMonth',
                        'loan_requests.loanInterest','loan_requests.loanAmount'
                        ,'loan_requests.totalAmount','loan_requests.monthlyPay'
                        ]);
    
        return view('components.pendingrq', compact('data'));
    }
}
