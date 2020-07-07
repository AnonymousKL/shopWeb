<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function dashboard(){
       return view('admin.layout');
    }
    public function handle_log(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('id', $result->id);
            return redirect('dashboard');
        }
        else 
            Session::put('message', 'Wrong!');
             return redirect('login');
    }
    public function logout(){
        Session::put('admin_name',null) ;
        Session::put('id',null);
        return redirect('login');
    }

    
}
