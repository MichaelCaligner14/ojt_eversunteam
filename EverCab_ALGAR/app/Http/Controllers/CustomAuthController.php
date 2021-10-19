<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }
    public function registerUser(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
            'name'=>'required',
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfully!');
        }else{
            return back()->with('fail', 'Something went wrong!');
        }
    }
    public function validate($request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
    }
    public function loginUser(Request $request){

        $this->validate();

        $user = User::where('email', '=', $request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'The password does not match.');
            }
        }else{
            return back()->with('fail', 'This email is not registered.');
        }
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function reservationlist(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('reservationlist', compact('data'));
    }
    public function reservationadd(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('reservationadd', compact('data'));
    }
    public function reservationedit(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('reservationedit', compact('data'));
    }
    public function payments(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('payments', compact('data'));
    }
    public function profile(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('profile', compact('data'));
    }
    public function profset(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('profset', compact('data'));
    }
    public function payset(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('payset', compact('data'));
    }
    public function privset(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('privset', compact('data'));
    }
    public function notifset(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('notifset', compact('data'));
    }
}
