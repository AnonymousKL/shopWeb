<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;

class CartController extends Controller
{
    public function AddCart($id){
        $product = DB::table('san_phams')->where('id', $id)->first();
        if($product != null){
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            dd($newCart);
        }
    }
}
