<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;


class BlogController extends Controller
{
    //lấy tất cả blog
    function getAllBlog(){
        $cate = Category::limit(12)->get();

        return view('blog',['data'=>$cate]);
    }
    function getBlogSingle(Request $request){
        $id = $request->id;
     $blog = Category::where('id', $id)->first(); 
        return view('blog-single',['blog_detail'=>$blog]);
    }
}
