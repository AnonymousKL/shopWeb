<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SanPham;
use App\DanhMuc;


class SanphamController extends Controller
{
    public function detail(){
        return view('detail');
    }
    public function home(){
        $sanpham = SanPham::all();
        $danhmuc = DanhMuc::all();
        // dd($data);
        
        return view('home', compact(['danhmuc', 'sanpham']));
    }
    public function add(Request $request){
        $tensp = $request->tensp;
        $theloai = $request->theloai;
        $giatien = $request->gia;
        $image_name = $request->file('image')->getClientOriginalName();
        $image_path = 'img/thumbnail/'.$image_name;
        $bigimage = 'img/poster'.$request->bigimage;
        $result = DB::table('san_phams')->insert([
            ['tenSP' => $tensp, 'idDM' => $theloai,'gia' => $giatien, 'image' => $image_path, 'bigimage' => $bigimage]
        ]); 
        if ($request->file('image')->isValid()){
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('image')->move('img/thumbnail',$image_name);
            return view('admin.layout');
        }
        else 
        echo "fail";
    }
    
}
