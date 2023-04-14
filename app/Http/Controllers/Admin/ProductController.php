<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'name' => 'required|max:191',
            'category_name' => 'required',
            'articul' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/product/create')
                ->withErrors($validator)
                ->withInput();
        }


        return '32';
    }

}
