<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    
    public function redirect(){
        $type=Auth::user()->usertype ??'0';
        if($type=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data=product::paginate(3);
        return view('user.UserHome', compact('data'));
        }
    }
    public function index(){
        if(auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data=product::paginate(3);
        return view('user.UserHome', compact('data'));
        }
    }
    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
    public function products(){
        return view('user.products');
    }
    public function addCart(Request $request, $id){

        if(Auth::id()){
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;
            $cart->save();

            return redirect()->back()->with('message','Product Added Successfully');
        }
        else{
            return view('auth.login');
        }

    }
}
