<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InitProductController;

class CartController extends Controller
{
    public function addToCart(Request $request){
    if($request->id_prod && $request->quantity){
        $product[]=array(
            'id_prod'=>$request->id_prod,
            'quantity'=>(int)$request->quantity
        );
        if(empty($request->session()->has('cart'))) {
            $request->session()->put('cart', $product);
        }else{
            $cart_prod= $request->session()->get('cart');
            $index=array_search($request->id_prod, array_column($cart_prod, 'id_prod'));
            if($index !== false){//если индекс есть то изменяем
                $cart_prod[$index]['quantity'] = $cart_prod[$index]['quantity'] + $request->quantity;
                $request->session()->put('cart', $cart_prod);
            }else{//нет то добавляем товар
                $cart_prod[]=$product[0];
                $request->session()->put('cart', $cart_prod);
            }
            return response()->json(['ok'=>$cart_prod]);
            //$request->session()->forget('cart');
        }
    }

        return ' 22 ';
    }
}
