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
    public function editProfile($id){
        $prof = DB::table('profiles')->where('id', $id)->first();
        return view('profedit', compact('prof'));
    }
    public function updateProfile(Request $request){
        DB::table('profiles')->where('id', $request->id)->update([
            'username'=>$request->username,
            'bdate'=>$request->bdate,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
        return back()->with('profile_update', 'Profile updated successfully!');
    }
    public function deleteProfile($id){
        DB::table('profiles')->where('id', $id)->delete();
        return back()->with('profile_delete', 'Profile deleted successfully!');
    }
}
