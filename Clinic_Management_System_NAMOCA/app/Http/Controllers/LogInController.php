<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Patient;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Verify;
use Hash;
use Session;



class LogInController extends Controller
{
    public function login(){
        return view ("auth/login");

    }
    public function sign(){
        return view ("auth/sign");

    }



   

    public function signUser(Request $request){

        $request -> validate ([
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:users',
        'username' => 'required',
        'password' => 'required|min:5|max:12'
        ]);
        $user = new User();
        $user ->firstname = $request ->firstname;
        $user ->lastname = $request ->lastname;
        $user ->address = $request ->address;
        $user ->email = $request ->email;
        $varify = [
            'body' => 'You receive a  new notification',
            'verifyEmail' => 'You are sucessfully registered',
            'url' => url('http://127.0.0.1:8000/login'),
            'thankyou' => 'Welcome'
        ];
        Notification::send($user, new Verify($varify));

        $user ->username = $request ->username;
        $user ->password = Hash::make($request ->password);
        $res = $user ->save();


        if($res){
            return back()->with('success','You have registered succesfully');
        }else {
            return back() ->with('fail','Something wrong');
        }
    }

    public function loginUser (Request $request)
    {
    
             $credentials = $request -> validate ([
            
                   'username' => 'required',
             'password' => 'required|min:5|max:12'
               ]);
                $user = User::where('username','=', $request -> username) ->first();
                 if($user){
                      if(Auth::attempt($credentials)){
                         $request ->session() ->put('loginId', $user->id);
                        return redirect('index');
    
                    }else {
                        return back() ->with('fail',' Wrong Password.');
                    }

               }else{
                     return back() ->with('fail',' This username is not registered.');
               }

    }
    public function index(){
        return view ("auth/index");
    }

    public function welcome(){
        return view ("messageUs/welcome");
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate('loginId');
    
        $request->session()->regenerateToken('loginId');
    
        return redirect('login');
    }

    public function handle()
    {
        $this->middleware(['auth', 'verified']);
    }
    
   
   

}




