<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{

    public function inventory(){

        $data = array(
            'data'=>DB::table('inventories')
            ->latest()
            ->get()
        );
        return view('inventory',$data);
    }

    public function addinventory(Request $request)
    {

        $request->validate([
            'product_name'=>'required',
            'items'=>'required',
            'Inventory_quantity'=>'required'

        ]);

        $query = DB::table('inventories')->insert([
            'product_name'=>$request->input('product_name'),
            'items'=>$request->input('items'),
            'Inventory_quantity'=>$request->input('Inventory_quantity'),
            'total_quantity'=>$request->input('Inventory_quantity')

        ]);
        if($query){
            return back()->with('success', 'Data have been save. ');
        }else{
            return back()->with('fail', 'Something went wrong');
        }


    }

    public function editinventory($id){
        $row = DB::table('inventories')
                ->where('id',$id)
                ->first();
        $data = [
            'Info' => $row,
        ];
        return view('editinventory', $data);
    }

    public function inventoryupdate(Request $request){

        $updating = DB::table('inventories')
                        ->where('id',$request->input('ivtname'))
                        ->update([
                            'product_name'=>$request->input('product_name'),
                            'items'=>$request->input('items'),
                            'total_quantity'=>$request->input('total_quantity')
                        ]);
                        return redirect('inventory');
    }
    
    public function inventorydelete($id){

        $delete = DB::table('inventories')->where('id', $id)->delete();
        return redirect('inventory');
    }

}
