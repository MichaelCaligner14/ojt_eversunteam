<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;


class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");

    }

    public function welcome()
    {
        $data = array();
        if(Session::has('loginID')){
            $data = user::where('id', '=', Session::get('loginID'))->first();
        }
        return view('auth.welcome', compact('data'));

    }
    
    public function registration()
    {
        return view("auth.registration");

    }
    public function registeruser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:12'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        /**$verifyData = [
            'body' => 'You receive a new notification',
            'verifyText' => 'You are sucessfully registered',
            'url' => url('http://127.0.0.1:8000/login'),
            'thankyou' => 'Welcome'
        ];
        Notification::send($user, new VerifyRegistration($verifyData));
        */
        $details = [
          'name' => ""
       ];
        Mail::to($user)->send(new Email($details));

        $user->password = Hash::make($request->password);

        $res = $user->save();
        if($res){
            return back()->with('success','You Have Created Account Successfuly');

        }else{
            return back()->with('fail','Something Wrong');

        }
    }

    public function loginuser(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:16'

        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Auth::attempt($credentials)){
                $request->session()->put('loginID', $user->id);
                return redirect('home');
            }else{
                return back()->with('fail', 'Password not match.');
            }
            
        }else{
            return back()->with('fail','This email is not registered');

        }

    }

    public function user()
    {
        $data = array();
        if(Session::has('loginID')){
            $data = user::where('id', '=', Session::get('loginID'))->first();
        }
        return view('user', compact('data'));
    }

    public function home(){
        return view('home');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate('loginID');
    
        $request->session()->regenerateToken('loginID');
    
        return redirect('login');
    }

        
}
