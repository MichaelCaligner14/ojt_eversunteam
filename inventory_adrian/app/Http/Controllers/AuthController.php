<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
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
        $credentials =$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:16'

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


    public function logout(){
        if (Session::has('loginID')){
            Session::pull('loginID');
            return redirect('login');
        }
    }



        
}
