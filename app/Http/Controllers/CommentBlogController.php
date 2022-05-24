<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentBlog;
use Auth;
use Alert;
class CommentBlogController extends Controller
{
    public function addCommentBlog(Request $request)
    {
        
        $data = array(
            'user_id' =>Auth::user()->id,
            'blog_id' =>$request->blog_id,
            'text_comment'=>$request->text_comment,
        
        );
       $commentBlog =  CommentBlog::create($data);
       if($commentBlog){
        Alert::success('Success', 'Add comment Success');
    }
    else{
        Alert::error('Error', 'Add comment Error');
    }
        return redirect()->back();
    }
}
