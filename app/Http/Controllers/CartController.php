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
            //$request->session()->forget('cart');//удалить из сессии
            return response()->json(['count'=>$this::updateCountCartHeader($request)]);

        }
    }
    }

    public static function updateCountCartHeader($request){

        if($request->session()->has('cart')){
            $cart_prod= $request->session()->get('cart');
            $count=0;
            foreach ($cart_prod as $item){
                $count= $count +  $item['quantity'];
            }
            return $count;
        }

    }

}
