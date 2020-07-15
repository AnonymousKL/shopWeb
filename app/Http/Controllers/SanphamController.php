<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SanPham;
use App\DanhMuc;


class SanphamController extends Controller
{
    public function detail($id){
        $result = DB::table('san_phams')->where('id', $id)->get();
        return view('detail',compact('result'));
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

   
    public function showaddimage(){
        return view('admin.addimage');
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
        return redirect('/product/addimage')->with('success', 'Updated');
    }

    public function payment(){
        return view('payment');
    }
    
}
