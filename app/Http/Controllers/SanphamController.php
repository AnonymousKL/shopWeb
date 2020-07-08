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
        $nam = DB::table('san_phams')->where('idDM', 1)
                                    ->orderBy('id','desc')
                                    ->limit(10)
                                    ->get();
        $nu = DB::table('san_phams')->where('idDM', 2)
                                    ->orderBy('id','desc')
                                    ->limit(10)
                                    ->get();
        $danhmuc = DanhMuc::all();
        // dd($data);
       
        return view('home', compact(['danhmuc', 'nam', 'nu']));
    }
    public function create(Request $request){
        $tensp = $request->tensp;
        $theloai = $request->theloai;
        $giatien = $request->gia;
        $image_name = $request->file('image')->getClientOriginalName();
        $image_path = 'img/thumbnail/'.$image_name;
        $bigimage_name = $request->file('bigimage')->getClientOriginalName();
        $bigimage_path = 'img/poster/'.$bigimage_name;
        $result = DB::table('san_phams')->insert([
            ['tenSP' => $tensp, 'idDM' => $theloai,'gia' => $giatien, 'image' => $image_path, 'bigimage' => $bigimage_path]
        ]); 
        if ($request->file('image')->isValid()){
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('image')->move('img/thumbnail',$image_name);
            return view('admin.add');
        }
        else 
        echo "fail";
    }
    public function addimage(Request $request){
        $banner_link = $request->link;
        $type = $request->type;
        $banner_name = $request->file('banner')->getClientOriginalName();
        $banner_path = 'img/banner/'.$banner_name;
        if($request->file('banner')->isValid()){
            $request->file('banner')->move('img/banner',$banner_name);
            DB::table('banners')->insert([
                ['bannerpath'=>$banner_path, 'type'=>$type, 'bannerlink' => $banner_link]
            ]);
        }
        return view('admin.addimage');
    }
    public function show(){
        return view('admin.add');
    }
    
}
