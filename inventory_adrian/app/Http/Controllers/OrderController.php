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
            'inventory_id'=>'required',
            'name'=>'required',
            'order'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'total'=>'required',
            'date'=>'required'
        ]);

        $query = DB::table('orders')->insert([
            'inventory_id'=>$request->input('inventory_id'),
            'name'=>$request->input('name'),
            'order'=>$request->input('order'),
            'price'=>$request->input('price'),
            'qty'=>$request->input('qty'),
            'total'=>$request->input('total'),
            'date'=>$request->input('date'),
        ]);
        if($query){
            return back()->with('success', 'Data have been save.');
        }else{
            return back()->with('fail', 'Something went wrong');
        }
        

    }

    public function decreaseQuantities()
    {
        foreach(order::content() as $item){
            $product_name = inventories::find($item->inventory->id);

            $product_name->update(['quantity'=> $product_name->quantity - $item->quantity]);
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
