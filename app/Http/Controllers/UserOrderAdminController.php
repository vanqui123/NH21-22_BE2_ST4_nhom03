<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOder;
use App\Models\ProductBooking;
use App\Models\OrderManagent;



class UserOrderAdminController extends Controller
{
    public function addUserOrder(Request $request){
        $data = array(
            'fullname' =>$request->fullname,
            'address' =>$request->address,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'payment_status' =>$request->payment_status,
        );
       $UserOder =  UserOder::insert($data);
        if($UserOder){
            ProductBooking::destroy($request->product_id);
        }
        return redirect()->route('user_order.add');
    }

    public function show(){
        $productBooking = ProductBooking::get();
        $cart = UserOder::get();
        return view('admin/cartadmin',['data'=>$cart,'productBooking'=>$productBooking]);
    }
}
