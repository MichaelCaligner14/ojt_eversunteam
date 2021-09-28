<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class customauthcontroller extends Controller
{
    public function login()
    {
        return view("auth.login");

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
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12'

        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(hash::check($request->password,$user->password)){
                $request->session()->put('loginID', $user->id);
                return redirect('home');
            }else{
                return back()->with('fail', 'Password not match.');
            }
            
        }else{
            return back()->with('fail','This email is not registered');

        }

    }
    public function home(){
        return view('home');
    }

    public function user(){
        return view('user');
    }
    public function logout(){
        if (Session::has('LoginID')){
            Sessin::pull('LoginID');
            return redirect('Login');
        }
    }
}
