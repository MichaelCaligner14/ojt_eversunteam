<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        $data = array(
            'list'=>DB::table('products')->get()
        );
        return view('product',$data);
    }
    public function addprod(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'items'=>'required',
            'price'=>'required',
            

        ]);

        $query = DB::table('products')->insert([
            'name'=>$request->input('name'),
            'items'=>$request->input('items'),
            'price'=>$request->input('price'),


        ]);
        if($query){
            return back()->with('success', 'Data have been save. ');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }
    public function editprod($id){
        $row = DB::table('products')
                ->where('id',$id)
                ->first();
        $data = [
            'Info' => $row,
            'Title'=>'Edit',
        ];
        return view('editprod', $data);
    }

    public function produpdate(Request $request){

        $updating = DB::table('products')
                        ->where('id',$request->input('prodname'))
                        ->update([
                            'name'=>$request->input('name'),
                            'items'=>$request->input('items'),
                            'price'=>$request->input('price'),
                            
                        ]);
                        return redirect('product');
    }
    public function proddelete($id){

        $delete = DB::table('products')->where('id', $id)->delete();
        return redirect('product');
    }
}
