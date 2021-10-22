<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Auth;

class CustomAuthController extends Controller
{
    public function login(){
        return view ("auth.login");
    }
    public function registration(){
        return view ("auth.registration");
    }
    
    public function about(){
        return view ("about");
    }
    public function subjects(){
        return view ("subjects");
    }
    

//Registration
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','Registered successfully');
        }else{
            return back()->with('fail','Something wrong');
        }

    }





//Login
/**public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'

        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('homepage');
                
            }else{
                return back()->with('fail','Password is not matches, Please try again !!'); 
            }
        }else{
            return back()->with('fail','This email is not registered');
        }
    }
*/
public function loginUser(Request $request){
    $credentials = $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'

    ]);
    $user = User::where('email',$request->email)->first();
    if($user){
        if(Auth::attempt($credentials)){
            $request->session()->put('loginId', $user->id);
            return redirect('homepage');
            
        }else{
            return back()->with('fail','Password is not matches, Please try again !!'); 
        }
    }else{
        return back()->with('fail','This email is not registered');
    }
}


    public function homepage(){
        $data = array();
        if(Session::has ('loginId')){
            $data = User::where('id',Session::get ('loginId'))->first();
        }
        return view ('homepage', compact('data'));
    }




public function logout(){
    Auth::logout();
    $request->session()->invalidate('loginId');
    $request->session()->regenerateToken('loginId');
        
        return redirect('welcome');

}


}



