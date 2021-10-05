<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
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
            'list' => DB::table('patients')->get()
        );
        return view ('patview', $data);
    }
   

    public function patientPage(Request $request){

        $request -> validate([
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
        $patient = new Patient();
        $patient ->fullname = $request ->fullname;
        $patient ->address = $request ->address;
        $patient ->email = $request ->email;
        $patient ->contact = $request ->contact;
        $patient ->age = $request ->age;
        $patient ->birth = $request ->birth;
        $patient ->temp = $request ->temp;
        $patient ->weight = $request ->weight;
        $patient ->height = $request ->height;

        $res = $patient ->save();
        if($res){
            return back() ->with('success','You have registered succesfully');
        }else {
            return back() ->with('fail','Something wrong');
        }

        
    }
    public function deletes($id){

        $delete = DB::table('patients')->where('id', $id)->delete();
        return redirect('patview');

    }

    
    //edit

   
    
    public function edit($id)
    {
        $row = DB::table('patients')->where('id',$id)->first();

        $data = [
            'info' => $row,
            'Title'=>'Edit', 
        ];
        return view('edit', $data);

    }
    public function update(Request $request){

        $updating = db::table('patients')
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
