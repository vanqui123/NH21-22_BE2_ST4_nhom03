<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;

class ProtypeController extends Controller
{
    function getProductType_id($type_id){
     
        $product_typeid = Product::where('type_id',$type_id)->get();
        return view('shop',['product_type'=>$product_typeid]);
    }
    function getAllProductType(){
        
        $products = Product::limit(12)->get();
        $type = Protype::All();
        return view('shop',['data'=>$products,'type'=>$type]);
    }
   

}
