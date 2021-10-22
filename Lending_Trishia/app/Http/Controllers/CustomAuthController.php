<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use App\Models\LoanReports;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration (){
        return view("auth.registration");
    }
    public function registerUser (Request $request){
       $request -> validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:5|max:12'
       ]);
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $res = $user->save();
       if($res){
           return back()-> with('success','You have registered successfully');
       }else{
           return back()-> with('fail','Something Wrong');
       }
    }
    public function loginUser(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('home');
                }else{
                return back()->with('fail','Password not matches.');
            }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }
    public function home(){

        $cust = DB::table('borrowers')->count();
        $act = LoanReports::where('approveStatus','=','Active')->count();
        
        $rcv = DB::table('payments')
                ->sum(\DB::raw('payAmount'));

        return view('home', compact('cust', 'act','rcv'));
    }
    public function logout()
    {
        if(Session::has('loginId')){
           Session::pull('loginId');
           return redirect('index'); 
        }
    }
    public function user(){
        $data = array();
        if(Session::has('loginId')){
            $data = user::where('id','=',Session::get('loginId'))->first();
        }
        return view('user',compact('data'));
    }
    
    public function loanreport(){
        return view('loanreport');
    }

    public function borrowers(){
        return view('borrowers');
    }
    
    public function sample(){
        return view("components.sample");
    }
    
   
    
}
