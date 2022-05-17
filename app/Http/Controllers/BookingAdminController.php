<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductBooking;
class BookingAdminController extends Controller
{
    public function show(){
        $cart = ProductBooking::get();
        return view('admin/cartadmin',['data'=>$cart]);
    }
}
