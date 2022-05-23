<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserOder;
use App\Models\ProductBooking;
use App\Models\OrderManagent;
use Auth;
use   Alert;

class UserOrderAdminController extends Controller
{
    public function addUserOrder(Request $request){
        $voucher_id = 0;
        if($voucher_id > 0){
            $voucher_id =$request->voucher_id;

        }else{
            $voucher_id = 1;
        }
        
        $data = array(
            'fullname' =>$request->fullname,
            'user_id' =>$request->user_id,
            'address' =>$request->address,
            'phone' =>$request->phone,
            'voucher_id' =>$voucher_id,
            'email' =>$request->email,
            'payment_status' =>$request->payment_status,
        );
       $UserOder =  UserOder::insert($data);
       if($UserOder){
        Alert::success('Success', 'Place Order Success');
    
            }
       else {
                Alert::error('Error', 'Place Order Error');
            }
        return redirect()->route('index');
    }

    public function show(Request $request){
        $user_id = Auth::user()->id;
        $cart = UserOder::get();
        $productBooking = ProductBooking::get(); 
        return view('admin/cartadmin',['data'=>$cart,'productBooking'=>$productBooking]);
    }
}
