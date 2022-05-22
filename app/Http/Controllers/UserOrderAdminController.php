<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOder;
use App\Models\ProductBooking;
use App\Models\OrderManagent;
use Auth;


class UserOrderAdminController extends Controller
{
    public function addUserOrder(Request $request){
        $data = array(
            'fullname' =>$request->fullname,
            'user_id' =>$request->user_id,
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

    public function show(Request $request){
        $cart = UserOder::get();
        $productBooking = ProductBooking::get();
        return view('admin/cartadmin',['data'=>$cart,'productBooking'=>$productBooking]);
    }
}
