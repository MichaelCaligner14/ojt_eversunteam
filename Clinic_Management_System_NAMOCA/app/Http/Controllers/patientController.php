<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\patientResult;
use Hash;
use Session;

use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function patient(){
        return view ('patient');

    }
    public function patview(){
        $data = array(
            'list' => DB::table('patient')
            ->get()
        );
        return view ('patview', $data);
    }
   

    public function patientPage(Request $request){

        $request->validate([
            'fullname' => 'required',
        'address' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'age' => 'required',
        'birth' => 'required',
        'temp' => 'required',
        'weight' => 'required',
        'height' => 'required'
        ]);
        $query = DB::table('patient')->insert([
            'fullname'=>$request->input('fullname'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'contact'=>$request->input('contact'),
            'age'=>$request->input('age'),
            'birth'=>$request->input('birth'),
            'temp'=>$request->input('temp'),
            'weight'=>$request->input('weight'),
            'height'=>$request->input('height')


        ]);
        if($query){
            return back()->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }
        
    }
    public function deletes($id){

        $delete = DB::table('patient')->where('id', $id)->delete();
        return redirect('patview');

    }

    
    //edit

   
    
    public function edit($id)
    {
        $row = DB::table('patient')->where('id',$id)->first();

        $data = [
            'info' => $row,
            'Title'=>'Edit', 
        ];
        return view('edit', $data);

    }
    public function update(Request $request){

        $updating = db::table('patient')
                        ->where('id',$request->input('id'))
                        ->update([
                            'fullname'=>$request->input('fullname'),
                            'address'=>$request->input('address'),
                            'email'=>$request->input('email'),
                            'contact'=>$request->input('contact'),
                            'age'=>$request->input('age'),
                            'birth'=>$request->input('birth'),
                            'temp'=>$request->input('temp'),
                            'weight'=>$request->input('weight'),
                            'height'=>$request->input ('height')
                        ]);
                        return redirect('patview');
    }


}
