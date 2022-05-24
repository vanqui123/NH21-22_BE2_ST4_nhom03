<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAminController extends Controller
{
    public function show(){
        $user = User::All();
        return view('admin/useradmin',['data'=>$user]);
    }
    public function add(){
        return view('admin/adduser');
    }
    public function addUser(Request $request){
        $data = array(
            
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
            'role'=>$request->role,
        );
        User::insert($data);
        return redirect()->back()->with('status',' Added Successfully');
    }
    public function edit(Request $request){
        $id = $request->id;
        $user = User::where('id',$id)->get();
        return view('admin/edituser',['useredit'=>$user]);
    }
    public function editUser(Request $request){
        $id = $request->id;
        $user = User::where('id',$id)->get();
        $user[0]->name =  $request->name;
        $user[0]->email = $request->email;
        $user[0]->password = $request->password;
        $user[0]->role = $request->role;
        $user[0]->save();
        return redirect()->route('show.user');
    }
    public function deleteUser(Request $request){
        $user = $request->id;
        $user = User::where('id',$user)->first();
        $user->delete();
        return redirect()->route('show.user')->with('status','Delete Successfully');
}
}
