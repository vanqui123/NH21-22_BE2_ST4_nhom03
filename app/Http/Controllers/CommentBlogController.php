<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentBlog;
use Auth;
class CommentBlogController extends Controller
{
    public function addCommentBlog(Request $request)
    {
        
        $data = array(
            'user_id' =>Auth::user()->id,
            'blog_id' =>$request->blog_id,
            'text_comment'=>$request->text_comment,
        
        );
        CommentBlog::create($data);
        return redirect()->back();
    }
}
