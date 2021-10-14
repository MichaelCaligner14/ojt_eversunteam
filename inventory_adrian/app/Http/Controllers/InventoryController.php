<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    
    public function inventory(){

        /**$sales = DB::table('inventories')
        ->join('orders', 'orders.inventory_id', '=', 'inventories.id')
        ->select(DB::raw('sum(inventories.quantity-orders.qty) AS result'))
        ->where('inventories.id', 2)
        ->where('orders.inventory_id', 2)
        ->first();
        dd($sales);*/

        $data = array(

            'list'=>DB::table('inventories')->get()
        );
        return view('inventory',$data);
    }

    public function addinventory(Request $request)
    {

        $request->validate([
            'product_name'=>'required',
            'items'=>'required',
            'quantity'=>'required',

        ]);

        $query = DB::table('inventories')->insert([
            'product_name'=>$request->input('product_name'),
            'items'=>$request->input('items'),
            'quantity'=>$request->input('quantity'),

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
            'Title'=>'Edit',
        ];
        return view('editinventory', $data);
    }

    public function inventoryupdate(Request $request){

        $updating = DB::table('inventories')
                        ->where('id',$request->input('ivtname'))
                        ->update([
                            'product_name'=>$request->input('product_name'),
                            'items'=>$request->input('items'),
                            'quantity'=>$request->input('quantity'),
                        ]);
                        return redirect('inventory');
    }
    
    public function inventorydelete($id){

        $delete = DB::table('inventories')->where('id', $id)->delete();
        return redirect('inventory');
    }

}