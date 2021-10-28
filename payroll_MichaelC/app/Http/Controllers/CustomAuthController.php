<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailNotification;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {

        $request->validate([
            'username'=>'required',
            'password'=>'required|min:8|max:20',
            'email'=>'required|email|unique:users'
        ]);
        $user = new User();
        $user->username =$request -> username;
        $user->email =$request -> email;
        $emailnotif = [
            'body' =>'You Received an new notification',
            'emailText'=>'You are successfully registered',
            'url'=>url('http://127.0.0.1:8000/login'),
            'thankyou'=>'Welcome to my system'
        
            ];
        Notification::send($user, new EmailNotification($emailnotif));
        $user->password = Hash::make($request -> password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfuly');
        } else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        
        $credentials = $request->validate([
            'username'=>'required',
            'password'=>'required|min:8|max:20'
    
        ]);

  
        $user = User::where('username', $request->username)->first();
        if($user){
            if(Auth::attempt($credentials)){
                $request->session()->put('loginID',$user->id);
                return redirect('employee');
            }else{
                return back()->with('fail','Password did not match');
            }
        }else{
            return back()->with('fail','username not yet Registered');
        }
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate('loginID');
    
        $request->session()->regenerateToken('loginID');
    
        return redirect('login');
        }
}
