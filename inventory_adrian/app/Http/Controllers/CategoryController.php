<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function category(){
        $data = array(
            'list'=>DB::table('categories')->get()
        );
        return view('category',$data);
    }

    public function addctg(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'category'=>'required',

        ]);

        $query = DB::table('categories')->insert([
            'name'=>$request->input('name'),
            'category'=>$request->input('category'),

        ]);
        if($query){
            return back()->with('success', 'Data have been save. ');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }

    public function editctg($id){
        $row = DB::table('categories')
                ->where('id',$id)
                ->first();
        $data = [
            'Info' => $row,
            'Title'=>'Edit',
        ];
        return view('editctg', $data);
    }

    public function ctgupdate(Request $request){

        $updating = DB::table('categories')
                        ->where('id',$request->input('ctgname'))
                        ->update([
                            'name'=>$request->input('name'),
                            'category'=>$request->input('category'),
                        ]);
                        return redirect('category');
    }
    
    public function ctgdelete($id){

        $delete = DB::table('categories')->where('id', $id)->delete();
        return redirect('category');
    }

    public function searchRecord (Request $request)
    {
        if($request ->isMethod('post'))
        {
            $name=$request->get('name');
            $list= DB::table('categories')->where('name', 'LIKE', '%' . $name . '%')->paginate(5);

        }
        return view('category', compact('list'));
    }
}
