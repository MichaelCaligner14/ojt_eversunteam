<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OrderInventory;


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
            'inventories_id'=>'required',
            'name'=>'required',
            'order'=>'required',
            'price'=>'required',
            'Order_quantity'=>'required',
            'total'=>'required',
            'date'=>'required'
        ]);

        $inventories_id = $request->input('inventories_id');
        
        $idquery = DB::table('inventories')->select('id')->where('inventories.id', '=', $inventories_id)
        ->first();

        $totalquery = DB::table('inventories')->select('total_quantity')->where('inventories.id', '=', $inventories_id)
        ->first();


        $totalquery = $totalquery->total_quantity;

        $Order_quantity = $request->input('Order_quantity');
        $deducted_quantity = $totalquery - $Order_quantity;


        $query = DB::table('orders')->insert([
            'inventories_id'=>$request->input('inventories_id'),
            'name'=>$request->input('name'),
            'order'=>$request->input('order'),
            'price'=>$request->input('price'),
            'total'=>$request->input('total'),
            'date'=>$request->input('date'),
            'Order_quantity'=>$request->input('Order_quantity'),
            'deducted_quantity' => $deducted_quantity

        ]);

        if($query){

            $updateOrders = DB::table('inventories')
            ->where('id', $inventories_id)
            ->update(['total_quantity' => $deducted_quantity]);

            return back()->with('success', 'Data have been save.');

        }else{
            
            return back()->with('fail', 'Something went wrong');
        }
        
    }

    public function edit($id){
        $row = DB::table('orders')
                ->where('id',$id)
                ->first();
        $data = [
            'Info' => $row,
            'Title'=>'Edit',
        ];
        return view('edit', $data);
    }

    public function update(Request $request){

        $updating = DB::table('orders')
                        ->where('id',$request->input('oid'))
                        ->update([
                            'name'=>$request->input('name'),
                            'order'=>$request->input('order'),
                            'date'=>$request->input('date')
                        ]);
                        return redirect('order');
    }
    

    public function delete($id){

        $delete = DB::table('orders')->where('id', $id)->delete();
        return redirect('order');
    }



}
