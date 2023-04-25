<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryToProduct;
use App\Models\Image;
use App\Models\product;
use Illuminate\Http\Request;

class InitProductController extends Controller
{
    public function InitProdAll(){
        $product=product::all();
        $category=CategoryToProduct::all('id','category_name')->toArray();
        $image=Image::all('id','name','path')->toArray();
        $products=array();
        foreach ($product as $item_product){

            $category_search = array_search($item_product->category_id, array_column($category, 'id'));
            $image_search = array_search($item_product->image_id, array_column($image, 'id'));

            if($category_search !== FALSE){
                $category_name=$category[$category_search]['category_name'];
            }else{
                $category_name='';
            }

            if($image_search !== FALSE){
                $image_path=$image[$image_search]['path'];
            }else{
                $image_path='';
            }
            $products[]=[
                'id' => $item_product->id,
                'name' => $item_product->name,
                'category_name' => $category_name,
                'articul' => $item_product->articul,
                'brand' => $item_product->brand,
                'quantity' => $item_product->quantity,
                'status' => $item_product->status,
                'price' => $item_product->price,
                'description' => $item_product->description,
                'image' => $image_path,
            ];
        }
    return $products;
    }

}
