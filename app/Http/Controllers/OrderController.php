<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\InitProductController;
use App\Http\Controllers\CartController;


class OrderController extends Controller
{

    public function index(Request $request){
        $count_cart= CartController::updateCountCartHeader($request);
        return view('order',compact('count_cart'));
    }

    public function createOrder(Request $request){

        $validator = Validator::make($request->all(), [
            'exampleInputAdres' => 'required',
            'exampleInputDate' => 'required',
        ]);

        if (!$validator->fails() && Auth::id() && $request->session()->has('cart')) {
        $order_obj=new Order();
        $order_obj->user_id=Auth::id();
        $order_obj->adres=$request->input('exampleInputAdres');
        $order_obj->date=$request->input('exampleInputDate');
        $order_obj->cart=json_encode($request->session()->get('cart'),true);
        $order_obj->save();
        $id_order=$order_obj->id;
            $count_cart= CartController::updateCountCartHeader($request);
            return view('success',compact('count_cart','id_order'));
        }else{
            return redirect('order')
                ->withErrors($validator)
                ->withInput();
        }



    }

}
