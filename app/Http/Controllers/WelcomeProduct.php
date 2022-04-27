<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class WelcomeProduct extends Controller
{
    function getAllProduct(){
        $products = Product::limit(12)->get();
        return view('index',['data'=>$products]);
    }
    function getProductID($id){
        $products = Product::find($id)->get(); 
        return view('product-single',['data'=>$products]);
    }
}
