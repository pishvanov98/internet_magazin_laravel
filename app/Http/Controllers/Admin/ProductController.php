<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product');
    }

    public function create(){
        return view('admin.product-create');
    }

    public function store(Request $request){
        var_dump($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:posts|max:191',
            'category_id' => 'required',
            'articul' => 'required|string',
            'brand' => 'required|string',
            'quantity' => 'required|numeric',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image_id' => 'required',
        ]);

//        if ($validator->fails()) {
//            return redirect('post/create')
//                ->withErrors($validator)
//                ->withInput();
//        }


        return '32';
    }

}
