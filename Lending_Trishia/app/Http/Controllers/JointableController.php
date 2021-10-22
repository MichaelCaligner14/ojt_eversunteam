<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Loan;
use App\Models\Borrower;
use App\Models\LoanRequest;
use App\Models\LoanReports;




class JointableController extends Controller
{
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


    public function deleteLoans($id){
        LoanRequest::where('id',$id)->delete();
        return back()->with('success','Record Deleted Successfully');
    }

    
    
   
    
}
