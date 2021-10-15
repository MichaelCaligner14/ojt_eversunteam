<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;


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
            'loanID' => 'required',
            'name' => 'required',
            'date' => 'required',
            'payAmount' => 'required'
        ]);

        $query = DB::table('payments')->insert([
            'loanID'=>$request->input('loanID'),
            'name'=>$request->input('name'),
            'date'=>$request->input('date'),
            'payAmount'=>$request->input('payAmount')   
        
        ]);
        if($query){
            return back()->with('success', 'Data have been Save.');
        }else{
            return back()->with('fail','Something went wrong');
        }
        
    }
    public function delete($id){

        $delete = DB::table('payments')
                ->where('id', $id)
                ->delete();
            return redirect('payments');
    } 
}
