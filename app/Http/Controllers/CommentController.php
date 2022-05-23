<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;
use Alert;
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
        $conmment =  Comment::create($data);
        if($conmment){
            Alert::success('Success', 'Add Comment Success');
        }
        else{
            Alert::error('Error', 'Add Comment Error');
        }
        return redirect()->back();
    }
}
