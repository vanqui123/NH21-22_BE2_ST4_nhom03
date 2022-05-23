<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\CommentBlog;

class BlogController extends Controller
{
    //lấy tất cả blog
    function getAllBlog(){
        $cate = Blog::limit(12)->get();

        return view('blog',['data'=>$cate]);
    }
    function getBlogSingle(Request $request){
        $id = $request->id;
        $commentBlog = CommentBlog::where('blog_id',$id)->get();
     $blog = Blog::where('id', $id)->first(); 
        return view('blog-single',['blog_detail'=>$blog,'comment_blog'=>$commentBlog]);
    }
}
