<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Protype;

class ProtypeController extends Controller
{
    function getProductType_id($id)
    {
        if (isset($id)) {
            $product_typeid = DB::table('product')->where('type_id', '=', $id)->paginate(8);
            $type = Protype::All();
            return view('productbytype', compact('product_typeid', 'type'));
        } else {
            return view('shop', compact('product_typeid', 'type'));
        }
    }
    function getAllProductType(){
        
        $products = Product::paginate(16);
        $type = Protype::All();
        return view('shop',['data'=>$products,'type'=>$type]);
    }
   

}
