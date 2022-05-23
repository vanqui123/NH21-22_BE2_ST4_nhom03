<?php

namespace App\Http\Controllers;

use App\Models\ProductBooking;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Voucher;
use Alert;
use Auth;
class ProductBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart_id = $request->cart_id;
        $data = array();
        foreach ($cart_id as $i=>$value) {
            $cart = Cart::find($value);
            $data[$i]['product_id'] = $cart->product_id;
            $data[$i]['user_id'] = $cart->user_id;
            $data[$i]['price'] = $cart->price;
            $data[$i]['quanity'] = $cart->quanity;
            $data[$i]['payment_status'] = '0';
         
        }
       
        $ProductBooking = ProductBooking::insert($data);
        if($ProductBooking){
            Cart::destroy($cart_id);
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductBooking  $productBooking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user_id = Auth::user()->id;
        $product_bookings = ProductBooking::where('user_id', $user_id)->get();
        $voucher_name = $request->voucher_name;
        $voucher = Voucher::where('voucher_name',$voucher_name)->first(); 
      
        if($voucher_name == $voucher['voucher_name']  ){
            if($voucher){
            Alert::success('Success', 'Voucher Success');
        }
                }
                else if($voucher_name != $voucher['voucher_name']) {
                    Alert::error('Error', 'Voucher Error');
                }
        return view('checkout',['data'=>$product_bookings,'voucher'=>$voucher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductBooking  $productBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductBooking $productBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductBooking  $productBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductBooking $productBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductBooking  $productBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductBooking $productBooking)
    {
        //
    }
}
