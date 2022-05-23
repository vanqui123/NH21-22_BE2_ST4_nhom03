<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use Auth;
class WishListController extends Controller
{
    public function addToWishList(Request $request)
    {
        
        $data = array(
            'user_id' =>Auth::user()->id,
            'product_id' =>$request->product_id,
        );
      WishList::create($data);
    
        return redirect()->route('wistList.list');
    }
    public function wishList()
    {   
        $user_id = Auth::user()->id;
        $wishLists = WishList::where('user_id', $user_id)->get(); 
        return view('wishList',['wishList'=>$wishLists]);
    }

     public function destroy(WishList $wishList,Request $request)
     {
          $id = $request->id;
          $wishList = WishList::where('id',$id)->first();
          $wishList->delete();
          return redirect()->route('wistList.list');
      }
}
