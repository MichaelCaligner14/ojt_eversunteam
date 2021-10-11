<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Patient;
use App\Models\result;
use App\Models\payment;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class paymentController extends Controller
{
 


    public function payment(){
        $data = array(
            'list' => DB::table('results')->get()
        );

        return view ('payment', $data);
    }

    public function searchRecords (Request $request)
    {
        if($request ->isMethod('post'))
        {
            $id=$request->get('id');
            $list= DB::table('results')->where('id', 'LIKE', '%' . $id . '%')->paginate(5);

        }
        return view('payment', compact('list'));
    }

}
