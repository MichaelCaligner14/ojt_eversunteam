<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\patientResult;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;

class resultController extends Controller
{
        

    public function result(){
     
            $list = DB::table('patient')
                                ->join('results', 'results.patientID','=','patient.id')
                                ->select('patient.id','patient.fullname','patient.birth','results.time','results.test')
                                ->get();
                                                 
            return view('result',compact('list'));
                            
    }

    public function resultPage(Request $request){

        $request -> validate([
            'patientID' => 'required',
            'time' => 'required',
            'test' => 'required'
            
    
            ]);
        $query = DB::table('results')->insert([
            'patientID'=>$request->input('patientID'),
            'time'=>$request->input('time'),
            'test'=>$request->input('test')

        ]);
        if($query){
            return back()->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }

        
    }

    public function delete($id){

        $delete = DB::table('results')->where('patientID', $id)->delete();
        return redirect('result');

    }

    public function searchRecord (Request $request)
    {
        if($request ->isMethod('post'))
        {

            $name=$request->get('name');
            $list= DB::table('patient')
            ->join('results', 'results.patientID','=','patient.id')
            ->where('fullname', 'LIKE', '%' . $name . '%')->paginate(5);
           

        }
        return view('result', compact('list'));
    }


    public function doctor(){
    
        return view ('doctor');
    }


    
}
