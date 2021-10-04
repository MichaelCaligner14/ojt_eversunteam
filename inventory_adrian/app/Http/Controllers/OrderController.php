<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function order()
    {
        $data = array(
            'list'=>DB::table('orders')->get()
        );
        return view('order',$data);
    }

    public function add(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'order'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'date'=>'required'
        ]);

        $query = DB::table('orders')->insert([
            'name'=>$request->input('name'),
            'order'=>$request->input('order'),
            'price'=>$request->input('price'),
            'qty'=>$request->input('qty'),
            'date'=>$request->input('date'),
        ]);
        if($query){
            return back()->with('success', 'Data have been save. ');
        }else{
            return back()->with('fail', 'Somrthing went wrong');
        }

    }

    public function update(Request $request){
    
    }

    public function delete($id){

        $delete = DB::table('orders')->where('id', $id)->delete();
        return redirect('order');
    }



}
