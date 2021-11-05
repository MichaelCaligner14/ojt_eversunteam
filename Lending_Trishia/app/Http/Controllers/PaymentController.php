<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payments;


class PaymentController extends Controller
{
    public function payments(){
        $data = array(
            'list' =>DB::table('payments')->get()
        );
         return view('components.payments',$data);
    }

    public function addPayment(Request $request)
    {
        $request->validate([
            'loanref_id' => 'required',
            'name' => 'required',
            'date' => 'required',
            'payAmount' => 'required'
        ]);
        
        $loanref_id = $request->input('loanref_id');
        $totalquery = DB::table('loan_reports')->select('loanBalance')
                ->where('loan_reports.id', '=', $loanref_id)
                ->first();
               
        $totalquery = $totalquery->loanBalance;
        $payAmount = $request->input('payAmount');
        $deductedAmount = $totalquery - $payAmount;


        $query = DB::table('payments')->insert([
            'loanref_id'=>$request->input('loanref_id'),
            'name'=>$request->input('name'),
            'date'=>$request->input('date'),
            'payAmount'=>$request->input('payAmount'),
            'deductedAmount'=>$deductedAmount  
        
        ]);
        if($query){

            $updateBalance = DB::table('loan_reports')
            ->where('id', $loanref_id)
            ->update(['loanBalance' => $deductedAmount]);

            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }
    public function deletePay($id){

        $delete = DB::table('payments')
                ->where('id', $id)
                ->delete();
            return redirect('payments');
    } 
}
