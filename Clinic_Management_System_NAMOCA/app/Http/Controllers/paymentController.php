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

}


