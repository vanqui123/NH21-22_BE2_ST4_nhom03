<?php

namespace App\Http\Controllers;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherAdminController extends Controller
{
    public function show(){
        $voucher = Voucher::All();
        return view('admin/voucheradmin',['data'=>$voucher]);
    }
    public function add(){
        return view('admin/addvoucher');
    }
    public function addVoucher(Request $request){
        $data = array(
            
            'voucher_name' =>$request->voucher_name,
            'voucher_price' =>$request->voucher_price,
        );
        Voucher::insert($data);
        return redirect()->back()->with('status',' Added Successfully');
    }
    public function edit(Request $request){
        $id = $request->voucher_id;
        $voucher = Voucher::find($id)->get();
        return view('admin/editvoucher',['voucher'=>$voucher]);
    }
    public function editVoucher(Request $request){
        $id = $request->voucher_id;
        $voucher = Voucher::find($id)->get();
        $voucher[0]->voucher_name =  $request->voucher_name;
        $voucher[0]->voucher_price = $request->voucher_price;
        $voucher[0]->save();
        return redirect()->route('show.voucher');
    }
    public function deleteVoucher(Request $request){
        $voucher_id = $request->voucher_id;
        $voucher = Voucher::where('id',$voucher_id)->first();
        $voucher->delete();
        return redirect()->route('show.voucher')->with('status','Delete Successfully');
}

}
