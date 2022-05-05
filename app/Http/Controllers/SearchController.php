<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
    //add search func
    function search(Request $request)
    {
        $product = Product::where('name', 'like', '%' . $request->keywords . '%')
            ->get();
        return view('search', compact('product'));
    }
}
