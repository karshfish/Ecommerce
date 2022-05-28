<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class AdminController extends Controller
{
    //
    public function Product(){
        return view('admin.Product');

    }
    public function uploadProduct(Request $request){
        $data= new product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->img=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->save();
        return redirect()->back()->with('message','Product Added Successfully');

    }
    public function uploadProductImage(Request $request){

    }
}
