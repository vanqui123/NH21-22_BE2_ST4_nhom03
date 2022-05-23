<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Alert;
use Auth;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function cartList()
    {
        $user_id = Auth::user()->id;
        $carts = Cart::where('user_id',$user_id)->get();    
        return view('cart',['carts'=>$carts]);
            }
    public function addToCart(Request $request)
    {
        $data = array(
            'product_id' =>$request->product_id,
            'user_id' =>Auth::user()->id,
            'product_name' =>$request->name,
            'price' =>$request->price,
            'quanity' =>$request->quantity,
            'image'=>$request->image,
            
        );
        Cart::create($data);
        return redirect()->route('cart.list')->with('success', 'Product is Added to Cart Successfully !');
    }
    public function increaseQuantity(Request $request){
        $id = $request->id;
        $product = Cart::where('id',$id)->get();
        $qty =  $product[0]->quanity + 1;
        $cart =  Cart::where('id',$id)->update(["quanity"=>$qty]);
        if($cart){
            Alert::success('Success', 'Update Success');
        }
        else{
            Alert::error('Error', 'Update Error');
        }
        return redirect()->route('cart.list');
    }
    public function decreaseQuantity(Request $request){
        $id = $request->id;
        $product = Cart::where('id',$id)->get();
        $qty =  $product[0]->quanity - 1;
       $cart =  Cart::where('id',$id)->update(["quanity"=>$qty]);
        if($cart){
            Alert::success('Success', 'Update Success');
        }
        else{
            Alert::error('Error', 'Update Error');
        }
        return redirect()->route('cart.list');
    }

    public function destroy(Cart $cart,Request $request)
    {
        $id = $request->id;
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect()->route('cart.list');
    }

}
