<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

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
        // dd($cartItems);
       
    }


    public function addToCart(Request $request)
    {
        $data = array(
            'product_id' =>$request->product_id,
            'product_name' =>$request->name,
            'price' =>$request->price,
            'quanity' =>$request->quantity,
            'image'=>$request->image,
            
        );
        Cart::create($data);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    // public function updateCart(Request $request)
    // {
    //    \Cart::update(
    //         $request->id,
    //         [
    //             'quantity' => [
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
