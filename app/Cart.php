<?php
namespace App;

class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __constant($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function AddCart($product, $id){
        $newProduct = ['quanTity' => 0, 'price' => $product->gia , 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $products)){
                $newProduct = $products[$id];
            }
        }
        $newProduct['quanTity']++;
        $newProduct['price'] = $newProduct['quanTity'] * $product->gia;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->gia;
        $this->totalQuantity++;
    }

}
?>