<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
        $carts = Cart::all();    
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
        Cart::where('id',$id)->update(["quanity"=>$qty]);
        return redirect()->route('cart.list');

        
    }
    public function decreaseQuantity(Request $request){
        $id = $request->id;
        $product = Cart::where('id',$id)->get();
        $qty =  $product[0]->quanity - 1;
        Cart::where('id',$id)->update(["quanity"=>$qty]);
        return redirect()->route('cart.list');
    }
    // public function updateCart(Request $request)
    // {
    //    \Cart::update(
    //         $request->id,
    //         [
    //              'quantity' => [
    //                 'relative' => false,
    //                 'value' => $request->quantity
    //             ],
    //         ]
    //     );

    //     session()->flash('success', 'Item Cart is Updated Successfully !');

    //     return redirect()->route('cart.list');
    // }

    public function destroy(Cart $cart,Request $request)
    {
        $id = $request->id;
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect()->route('cart.list');
    }

    public function cartCount(){
        $cartCount = Cart::totalFloat();
        var_dump($cartCount);
        return response()->json(['count',$cart]);
        
    }
    public function clearAllCart()
    {
      Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list');
    }
}
