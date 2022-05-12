<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
    //add search func
    function search(Request $request)
    {
        $tukhoa = $request->get('keywords');
        $products = Product::where('name', 'like', '%'.$tukhoa.'%')
            ->paginate(8)->appends(['keywords' => $tukhoa]);
     
        return view('search', compact('products'))->with('products',$products);
    }
}
