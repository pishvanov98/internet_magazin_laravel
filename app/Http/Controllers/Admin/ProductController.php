<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryToProduct;
use App\Models\Image;
use App\Models\product;
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'category_name' => 'required',
            'articul' => 'required',
            'brand' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('admin/product/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $mass_request=$request->all();
            $category_id= $this->addCategory($mass_request['category_name']);
            $image_id= $this->addImage($request);

$mass_product=[
    'name' => $mass_request['name'],
    'category_id' => $category_id,
    'articul' => $mass_request['articul'],
    'brand' => $mass_request['brand'],
    'quantity' => (int)$mass_request['quantity'],
    'status' => (int)$mass_request['status'],
    'price' => (int)$mass_request['price'],
    'description' => $mass_request['description'],
    'image_id' => $image_id,
];

    $this->addProduct($mass_product);

        }


        return '32';
    }


    private function addCategory($category){
        $category_class= new CategoryToProduct;
        $category_class->category_name=$category;
        $category_class->save();

        return $category_class->id;
    }

    private function addImage($request){

            $file= $request->file('image')->store('product','public_img');
            $file_name = $request->file('image')->getClientOriginalName();//получаю имя картинки

            $image_class= new Image;
            $image_class->path=$file;
            $image_class->name=$file_name;
            $image_class->save();

            return $image_class->id;

    }


    private function addProduct($product){

        var_dump($product);

        $test =product::created($product);

        dd($test);
        var_dump($test);


    }

}
