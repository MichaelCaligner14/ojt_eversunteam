<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\LoanReports;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotification;


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
    
       $data = [
          'name' => "Admin"
       ];

        Mail::to($user)->send(new MailNotification($data));
    
       $user->password = Hash::make($request->password);
       $res = $user->save();

       if($res){
           return back()-> with('success','You have registered successfully');
       }else{
           return back()-> with('fail','Something Wrong');
       }

      
    }

    public function loginUser(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
    
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Auth::attempt($credentials)){
                $request->session()->put('loginId', $user->id);
                return redirect('home');
                
            }else{
                return back()->with('fail','Password is not matches, Please try again !!'); 
            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }
   
    public function home(){
        $data = array();
        if(Session::has('loginId')){
            $data = user::where('id','=',Session::get('loginId'))->first();
        }
       
        $cust = DB::table('borrowers')->count();
        $act = LoanReports::where('approveStatus','=','Active')->count();
        
        $rcv = DB::table('loan_requests')
                ->join('loan_reports','loan_requests.id','=','loan_reports.loanrequest_id')
                ->select('loan_requests.totalAmount')
                //->where('loan_reports.approveStatus','=','Active')
                ->sum(\DB::raw('totalAmount'));

        return view('home', compact('cust', 'act','rcv','data'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('index');
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
    
    
    public function welcome(){
        return view("welcome");
    }
    
}
