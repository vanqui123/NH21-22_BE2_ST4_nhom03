<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        
        $data = array(
            'user_id' =>Auth::user()->id,
            'product_id' =>$request->product_id,
            'text_comment'=>$request->text_comment,
            'rate'=>$request->rating
        );
        Comment::create($data);
        return redirect()->back();
    }
}
