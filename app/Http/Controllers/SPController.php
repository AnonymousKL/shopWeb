<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        if ($request->file('image')->isValid() && $request->file('bigimage')->isValid()){
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('image')->move('img/thumbnail',$image_name);
            $request->file('bigimage')->move('img/poster',$bigimage_name);
            return redirect('sanpham');
        }
        else 
        echo "fail";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sp = DB::table('san_phams')->where('idDM', $id)
                                    ->orderBy('id','desc')
                                    ->get();
        $dm = DB::table('danh_mucs')->where('id', $id)->value('ten');
        return view('admin.show',compact(['sp','dm']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
