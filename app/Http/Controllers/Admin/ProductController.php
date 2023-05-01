<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\InitProductController;
use App\Models\CategoryToProduct;
use App\Models\Image;
use App\Models\product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){

        $initProd=new InitProductController;
        $product=$initProd->InitProdAll();
        return view('admin.product',compact('product'));
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
           $check= $this->checkIsetProduct($mass_request['name']);

           if($check){

               $validator->errors()->add('name', 'Товар с таким же именем уже существует!');
               return redirect('admin/product/create')
                   ->withErrors($validator)
                   ->withInput();
           }
            $category_id= $this->addCategory($mass_request['category_name']);
            $image_id= $this->addImage($request);
            $date= Carbon::now();
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
            'created_at' => $date->toDateTimeString(),
            'updated_at' => $date->toDateTimeString()
        ];

    $this->addProduct($mass_product);
    return redirect()->route('admin.product');
        }
    }


    private function addCategory($category){

        $find_category=DB::table('category_to_product')->where('category_name',$category)->get()->first();
        if($find_category){
            $category_id=$find_category->id;
        }else{
            $category_class= new CategoryToProduct;
            $category_class->category_name=$category;
            $category_class->save();
            $category_id=$category_class->id;
        }
        return $category_id;
    }

    private function addImage($request){
        $file_name = $request->file('image')->getClientOriginalName();//получаю имя картинки
        $find_image=DB::table('image')->where('name',$file_name)->get()->first();
        if($find_image){
            $image_id=$find_image->id;
        }else{

            $file= $request->file('image')->store('product','public_img');

            $image_class= new Image;
            $image_class->path=$file;
            $image_class->name=$file_name;
            $image_class->save();
            $image_id=$image_class->id;

        }

            return $image_id;

    }


    private function addProduct($product){

        $check_prod=DB::table('product')->insert([$product]);

}

private function checkIsetProduct($name){

    $check_prod=DB::table('product')->where('name',$name)->get()->toArray();

        return $check_prod;

}


public function edit($request){

    $initProd=new InitProductController;
    $product=$initProd->InitProdAll($request);
    $product=$product[0];

    return view('admin.product-edit', compact('product'));

}

public function update(Request $request){

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:191',
        'category_name' => 'required',
        'articul' => 'required',
        'brand' => 'required',
        'quantity' => 'required',
        'status' => 'required',
        'price' => 'required',
        'description' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('admin/product')
            ->withErrors($validator)
            ->withInput();
    }else{
        $mass_request=$request->all();
        $category_id= $this->addCategory($mass_request['category_name']);
        $image_id=false;
        if(!empty($request->file('image'))){
            $image_id= $this->addImage($request);
        }
        $date= Carbon::now();
        if($image_id === false){
            $mass_product=[
                'name' => $mass_request['name'],
                'category_id' => $category_id,
                'articul' => $mass_request['articul'],
                'brand' => $mass_request['brand'],
                'quantity' => (int)$mass_request['quantity'],
                'status' => (int)$mass_request['status'],
                'price' => (int)$mass_request['price'],
                'description' => $mass_request['description'],
                'created_at' => $date->toDateTimeString(),
                'updated_at' => $date->toDateTimeString()
            ];
        }else{
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
                'created_at' => $date->toDateTimeString(),
                'updated_at' => $date->toDateTimeString()
            ];
        }
        $id=$request->route('prod');
        $this->updateProduct($mass_product,$id);
        return redirect()->route('admin.product');

    }

}

private function updateProduct($data,$id){
        DB::table('product')->where('id',$id)->update($data);//получили по id данные колонки
}

}
