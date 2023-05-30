<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InitProductController;

class CartController extends Controller
{

    public function index(Request $request){
        //$request->session()->forget('cart');//удалить из сессии
        $count_cart= $this::updateCountCartHeader($request);

        $products=$this->getProductToId($request);

        return view('cart',compact('count_cart','products'));
    }

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
        }
        return response()->json(['count'=>$this::updateCountCartHeader($request)]);
    }
    }


    public function delToCart(Request $request){
        if($request->id_prod && $request->quantity && $request->session()->has('cart')){
            $cart_prod= $request->session()->get('cart');
            $index=array_search($request->id_prod, array_column($cart_prod, 'id_prod'));

            $cart_prod[$index]['quantity'] = $cart_prod[$index]['quantity'] - $request->quantity;
            $del_prod=false;
            if($cart_prod[$index]['quantity'] <= 0){
               $del_prod=$request->id_prod;
                unset($cart_prod[$index]);
            }
            $request->session()->put('cart', array_values($cart_prod));
            return response()->json(['count'=>$this::updateCountCartHeader($request),'del_prod'=>$del_prod]);
        }
    }

    public static function updateCountCartHeader($request){

        if($request->session()->has('cart')){
            $cart_prod= $request->session()->get('cart');
            $count=0;
            foreach ($cart_prod as $item){
                $count = $count + $item['quantity'];
            }
            return $count;
        }else{
            return 0;
        }

    }
    public function getProductToId($request){

        if($request->session()->has('cart')){

            $initProd= new InitProductController();

            $cart_prod= $request->session()->get('cart');
            $prod_mass=[];
            foreach ($cart_prod as $item){
               $product= $initProd->InitProdAll($item['id_prod']);
                $prod_mass[]=[
                    'id'=>$product[0]['id'],
                    'name'=>$product[0]['name'],
                    'articul'=>$product[0]['articul'],
                    'brand'=>$product[0]['brand'],
                    'quantity'=>$product[0]['quantity'],
                    'status'=>$product[0]['status'],
                    'price'=>$product[0]['price'],
                    'image'=>$product[0]['image'],
                    'countToCart'=>$item['quantity'],
                ];
            }
            return $prod_mass;
        }else{
            return false;
        }
    }

}
