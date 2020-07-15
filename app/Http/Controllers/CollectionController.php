<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CollectionController extends Controller
{
    public function collection($id){
        $result = DB::table('san_phams')->where('idDM',$id)->get();
        return view('collection', ['result' => $result]);
    }
}
