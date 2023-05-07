<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryToProduct;
use App\Models\ImageProduct;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InitProductController extends Controller
{
    public function InitProdAll($id = false,$limit= false){
        if($id === false) {
            if($limit !== false){
                $product = product::orderBy('updated_at', 'DESC')->limit($limit)->get();
            }else{
                $product = product::orderBy('updated_at', 'DESC')->get();
            }
            $category = CategoryToProduct::all('id', 'category_name')->toArray();
            $image = ImageProduct::all('id', 'name', 'path')->toArray();
            $products = array();
            $products = $this->getArrProd($product, $category, $image, $products);
        }else{
            $products = array();
            if(is_array($id)){
                 $product = DB::table('product')->whereIn('id', $id)->get();
                 $category = CategoryToProduct::all('id', 'category_name')->toArray();
                 $image = ImageProduct::all('id', 'name', 'path')->toArray();
                 $products = $this->getArrProd($product, $category, $image, $products);
            }else{
                 $product = DB::table('product')->find($id);
                 $category = DB::table('category_to_product')->find($product->category_id);
                 $image = DB::table('image')->find($product->image_id);

                $products[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'category_name' => $category->category_name,
                    'articul' => $product->articul,
                    'brand' => $product->brand,
                    'quantity' => $product->quantity,
                    'status' => $product->status,
                    'price' => $product->price,
                    'description' => $product->description,
                    'image' => [$image->name, $image->path],
                ];

            }

        }
    return $products;
    }

    /**
     * @param \Illuminate\Support\Collection $product
     * @param array $category
     * @param array $image
     * @param array $products
     * @return array
     */
    private function getArrProd(\Illuminate\Support\Collection $product, array $category, array $image, array $products): array
    {
        foreach ($product as $item_product) {

            $category_search = array_search($item_product->category_id, array_column($category, 'id'));
            $image_search = array_search($item_product->image_id, array_column($image, 'id'));

            if ($category_search !== FALSE) {
                $category_name = $category[$category_search]['category_name'];
            } else {
                $category_name = '';
            }

            if ($image_search !== FALSE) {
                $image_result = [$image[$image_search]['name'], $image[$image_search]['path']];
            } else {
                $image_result = '';
            }
            $products[] = [
                'id' => $item_product->id,
                'name' => $item_product->name,
                'category_name' => $category_name,
                'articul' => $item_product->articul,
                'brand' => $item_product->brand,
                'quantity' => $item_product->quantity,
                'status' => $item_product->status,
                'price' => $item_product->price,
                'description' => $item_product->description,
                'image' => $image_result,
            ];
        }
        return $products;
    }

}
