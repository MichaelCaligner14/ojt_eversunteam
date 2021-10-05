<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\result;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;

class resultController extends Controller
{
    

    public function result(){
        $data = array(
            'list' => DB::table('results')->get()
        );

        return view ('result', $data);
    }

    public function resultPage(Request $request){

        $request -> validate([
        'fullname' => 'required',
        'date' => 'required',
        'time' => 'required',
        'test' => 'required'
        

        ]);
        $Result = new result();
        $Result ->fullname = $request ->fullname;
        $Result ->date = $request ->date;
        $Result ->time = $request ->time;
        $Result ->test = $request ->test;
      

        $res = $Result ->save();
        if($res){
            return back() ->with('success','You have add succesfully');
        }else {
            return back() ->with('fail','Something wrong');
        }

        
    }

    public function delete($id){

        $delete = DB::table('results')->where('id', $id)->delete();
        return redirect('result');

    }

    public function searchRecord (Request $request)
    {
        if($request ->isMethod('post'))
        {
            $name=$request->get('name');
            $list= DB::table('results')->where('fullname', 'LIKE', '%' . $name . '%')->paginate(5);

        }
        return view('result', compact('list'));
    }


    public function doctor(){
    
        return view ('doctor');
    }

    
}
