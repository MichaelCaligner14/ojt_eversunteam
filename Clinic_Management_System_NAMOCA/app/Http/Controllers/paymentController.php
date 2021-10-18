<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\patientResult;
use Hash;
use Session;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class paymentController extends Controller
{
 
    public function payment(){
     
        $list = DB::table('patient')
                            ->join('results', 'results.patientID','=','patient.id')
                            ->select('patient.id','patient.fullname','patient.birth','results.time','results.test')
                            ->get();
                                             
        return view('payment',compact('list'));
                        
}



    public function paymentShow(){
        $list = DB::table('patient')
        ->join('results', 'results.patientID', '=', 'patient.id')
        ->join('payment', 'payment.patientID', '=', 'results.id')
        ->select('results.id', 'patient.fullname', 'patient.birth' , 'results.time','results.test', 'payment.bill','payment.cash','payment.change')
        ->get();

     return view('paymentShow',compact('list'));

     
    }




    public function searchRecords (Request $request)
    {
        if($request ->isMethod('post'))
        {
            
            $name=$request->get('fullname');
            $list= DB::table('patient')
            ->join('results', 'results.patientID','=','patient.id')
            ->where('fullname', 'LIKE', '%' . $name . '%')->paginate(5);
           

        }
        return view('payment', compact('list'));
    }


    public function paymentPage(Request $request){

        $request -> validate([
            'patientID' => 'required',
            'bill' => 'required',
            'cash' => 'required',
            'change' => 'required'
            
    
            ]);
        $query = DB::table('payment')->insert([
            'patientID'=>$request->input('patientID'),
            'bill'=>$request->input('bill'),
            'cash'=>$request->input('cash'),
            'change'=>$request->input('change')

        ]);
        if($query){
            return redirect('paymentShow')->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }

        
    }

    public function deleted($fullname){

        $delete = DB::table('patient')->where('fullname', $fullname)->delete();
        return redirect('paymentShow');

    }

}


