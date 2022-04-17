<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function getAllProduct(){
        $products = Product::limit(12)->get();
        return view('index',['data'=>$products]);
    }
    function getProductID($id){
        $product = Product::where('id',$id)->first(); 
        $type_id = $product->type_id;
        echo $type_id;
        $type_product = Product::where('type_id',$type_id)->get();
        return view('product-single')
        ->with(['product_detail'=>$product])
        ->with(['type_products'=>$type_product]);
    }
  
}
