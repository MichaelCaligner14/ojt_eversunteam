<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function addProfile(){
        return view('profset');
    }
    public function saveProfile(Request $request){
        DB::table('profiles')->insert([
            'username'=>$request->username,
            'bdate'=>$request->bdate,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
        return back()->with('profile_add', 'Profile updated successfully!');
    }
    public function showProfile(){
        $prof = DB::table('profiles')->first();
        return view('profile', compact('prof'));
    }
}
