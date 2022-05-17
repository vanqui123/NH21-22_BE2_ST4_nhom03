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
    public function edit(Request $request){
        $id = $request->id;
        $blog = Category::find($id)->get();
        return view('admin/editblog',['blog'=>$blog]);
    }
    public function addBlog(Request $request){
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/',$filename);
        };
        $data = array(
            
            'title' =>$request->title,
            'slug' =>$request->slug,
            'image' =>$image = $filename,
        );
        Category::insert($data);
        return redirect()->back()->with('status',' Added Successfully');
    
    }
    public function editblog(Request $request){
        $id = $request->id;
        $blog = Category::find($id)->get();
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/',$filename);
        };
        $blog[0]->title =  $request->title;
        $blog[0]->slug = $request->slug;
        $blog[0]->image = $filename;

        $blog[0]->save();
        return redirect()->route('show.blog');
    }
    public function deleteBlog(Request $request){
            $id = $request->id;
            $product = Category::where('id',$id)->first();
            $product->delete();
            return redirect()->route('show.blog')->with('status','Delete Successfully');
    }

}
