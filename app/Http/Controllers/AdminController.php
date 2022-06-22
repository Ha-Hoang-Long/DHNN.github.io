<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
    	return view('admin.login');
    }
    public function account_verification(Request $request){
        // $pass = $request->password;
        // echo $pass;
        $credentials = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.show_dashboard');
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    

    public function show_dashboard(){
        $adminUser = Auth::guard('admin')->user();
            return view('admin.dashboard',['user'=>$adminUser]);
        
    }
    public function add_acount_user_form(){
        $adminUser = Auth::guard('admin')->user();
            return view('admin.add_acount_user',['user'=>$adminUser]);
        
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
