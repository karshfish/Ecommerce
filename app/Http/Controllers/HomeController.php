<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
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
            return view ('user.UserHome');
        }
    }
    public function index(){
        if(auth::id())
        {
            return redirect('redirect');
        }
        else
        {
        return view('user.UserHome');
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
}
