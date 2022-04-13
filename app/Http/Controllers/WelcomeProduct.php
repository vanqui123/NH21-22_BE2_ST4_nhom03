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
    function getProductID($id=4){
        $products = Product::find($id)->first(); 
        return view('product-single',['data'=>$products]);
    }
}
