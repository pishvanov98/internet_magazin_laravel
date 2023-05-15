<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\InitProductController;
use App\Http\Controllers\CartController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

       $count_cart= CartController::updateCountCartHeader($request);

        $initProd=new InitProductController();
        $products=$initProd->InitProdAll(false, 14);

        return view('home', compact('products','count_cart'));
    }
}
