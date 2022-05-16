<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class BlogAdminController extends Controller
{
    public function show(){
        $blog = Category::All();
        return view('admin/blogadmin',['data'=>$blog]);
    }
    public function add(){
        $blog = Category::All();
        return view('admin/addblog');
    }
    public function addBlog(Request $request){
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientExtension();
            $filename = time().'.'.$extention;
        };
        $data = array(
            'name' =>$request->name,
            'title' =>$request->title,
            'slug' =>$request->slug,
            'image' =>$image = $filename,

         
        );
        Category::insert($data);
        session()->flash('success', 'Blog is Added to Message Successfully !');

    }
}
