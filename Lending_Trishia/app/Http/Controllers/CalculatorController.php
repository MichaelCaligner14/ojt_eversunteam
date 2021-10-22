<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    
    //public function index(Request $request){
    //    $firstnumber = $request->input('firstnumber');
    //    $secondnumber = $request->input('secondnumber');
   //     $operator = $request->input('operator');
   //     $result = 0;
    //    if ($operator == '+') {
    //        $result = $firstnumber + $secondnumber;
    //    }elseif ($operator == '-') {
    //        $result = $firstnumber - $secondnumber;
   //     }elseif($operator=='*'){
    //        $result = $firstnumber * $secondnumber;
   //     }elseif ($operator=='/') {
   //         $result = $firstnumber / $secondnumber;
   //     }elseif ($operator=='%') {
   //         $result = $firstnumber % $secondnumber;
   //     }else{
    //        $result = 0;
   //     }
   //      return redirect('sample1')->with('message','Your answer is:'.$result);
  //  }
  
    public function formula(){
        return view("components.formula");
    }

    public function calc(Request $request){
        $loanAmount = $request->input('loanAmount');
        $loanMonth = $request->input('loanMonth');
        $loanInterest = $request->input('loanInterest');
        $totalAmount = 0;
        $monthlyPay = 0;

        $iRate = $loanAmount * ($loanInterest / 100);
        $totalAmount = $loanAmount + ($iRate * $loanMonth);
        $monthlyPay = $totalAmount / $loanMonth;

        return redirect('sample1')->with('message',
        'Total Payable Amount '.$totalAmount)->with('message1',
        'Monthly Payable Amount '.$monthlyPay);
       
    }
}
