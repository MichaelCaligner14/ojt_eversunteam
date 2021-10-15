<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Loan;
use App\Models\Borrower;


class JointableController extends Controller
{
    public function loanreport(){
        $data = Borrower::join('loan_requests','loan_requests.borrowers_id','=','borrowers.id')
                        ->get(['loan_requests.id','borrowers.lname','borrowers.fname','borrowers.mname','loan_requests.loanType',
                        'loan_requests.loanMonth','loan_requests.loanInterest','loan_requests.loanAmount','loan_requests.totalAmount','loan_requests.monthlyPay','loan_requests.loanrqStatus','loan_requests.status']);
    
    return view('components.loanreport', compact('data'));
    }

}
