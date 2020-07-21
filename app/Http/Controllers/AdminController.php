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
    public function register(){
        return view('admin.register');
    }
    public function dashboard(){
        if(!session('admin_name'))
            {
                return redirect('/login');
            }
        else{
                return view('admin.add');
            }
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
            Session::put('message', 'Sai TK or PASS!');
             return redirect('login');
    }

    public function handle_reg(Request $request){
        if($request){
            $admin_email = $request->admin_email;
            $admin_name = $request->admin_name;
            $admin_password = md5($request->admin_password);

            $result = DB::table('tbl_admin')->insert([
                ['admin_email' => $admin_email, 'admin_password' => $admin_password, 'admin_name' => $admin_name]
            ]);

            Session::put('message', 'Đăng ký admin thành công');
            return redirect('login');
        }
        else{
            Session::put('message', 'Thất bại');
            return redirect('register');
        }
    }
    public function logout(){
        Session::put('admin_name',null) ;
        Session::put('id',null);
        return redirect('login');
    }

    
}
