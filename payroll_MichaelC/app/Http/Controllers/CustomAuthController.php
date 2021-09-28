<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'password'=>'required|min:5|max:20',
            'email'=>'required|email|unique:users'
        ]);
        $user = new User();
        $user->username =$request -> username;
        $user->password = Hash::make($request -> password);
        $user->email =$request -> email;
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfuly');
        } else{
            return back()->with('fail','Something wrong');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:20'
        ]);
        $user = User::where('username','=', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginID',$user->id);
                return redirect('employee');
            }else{
                return back()->with('fail','Password did not match');
            }
        }else{
            return back()->with('fail','username not yet Registered');
        }
    }
    public function employee(){
        return view("employee");
    }
    public function logout(){
        if(Session::has('loginID')){
            Session::pull('loginID');
            return redirect('login');
        }
    }
}