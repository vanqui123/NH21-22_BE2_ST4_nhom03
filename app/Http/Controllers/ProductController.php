<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class ProductController extends Controller
{
    function getAllProduct(){
        $products = Product::limit(12)->get();
        return view('index',['data'=>$products]);
    }
    function getProductID($product_id){
        $product = Product::where('product_id',$product_id)->first(); 
        $type_id = $product->type_id;
        $type_product = Product::where('type_id',$type_id)->limit(4)->get();
        return view('product-single',['type_products'=>$type_product,'product_detail'=>$product]);
    }

  
  
}
