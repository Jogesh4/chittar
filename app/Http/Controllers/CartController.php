<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\CartItem;

class CartController extends Controller
{

    public function index()
    {
        if(!empty(auth()->user()->id)){
                $userID = auth()->user()->id;
                $total = 0;
                // \Cart::session($userID)->clear();
                $cartItems = CartItem::where(['user_id' => auth()->user()->id,'status' => 1])->get();
                
                foreach($cartItems as $cartitem){
                      $total = $total + $cartitem->total;
                }

                return view('cart.index',compact('cartItems','total'));
            }
            else{
                return redirect()->route('login');
            }
    }

    public function add_to_cart(Request $request)
    {  
        $userID = auth()->user()->id;

        $item = Item::where('id',$request->item_id)->first();

        $cart = CartItem::where(['item_id'=>$item->id,'user_id'=>auth()->user()->id,'status' => 1])->first();

        if(!$cart){
            $cartItem = new CartItem;
            if(!empty($request->quantity)){
               $cartItem->qty = $request->quantity;
            }
            else{
                $cartItem->qty = 1;
            }
            $cartItem->name = $item->name;
            $cartItem->image = $item->image;
            $cartItem->price = $item->price;
            $cartItem->total = $item->price;
            $cartItem->item_id = $item->id;
            $cartItem->user_id = $userID;
            $cartItem->status = 1;
            $cartItem->save();
        }
        

        return 1;
    }

    public function remove_from_cart()
    {
        $userID = auth()->user()->id;
        // \Cart::session($userID)->clear();

        $cartItems = CartItem::where('user_id', $userID)->get();
        foreach($cartItems as $item) {
            $item->delete();
        }

        return redirect()->back();
    }

    public function remove_item_from_cart(Request $request)
    {
        $cart_id = $request->cart_id;
        $userID = auth()->user()->id;
        // \Cart::session($userID)->remove($cart_id);

        $cartItems = CartItem::where('id', $cart_id)->delete();

        return redirect()->back();
    }

    public function add_cart_quantity(Request $request)
    {
        $cart_id = $request->cart_id;
        $quantity = $request->quantity + 1;
        $total = 0;
        $userID = auth()->user()->id;

        $cart = CartItem::where('id', $cart_id)->first();
        $cart->qty = $quantity;
        $cart->total = $cart->price * $quantity;
        $cart->save();

        $cartItems = CartItem::where(['user_id' => auth()->user()->id,'status' => 1])->get();
                
                foreach($cartItems as $cartitem){
                      $total = $total + $cartitem->total;
                }
         
         
        $data['new'] = [
                         'code' => 1,
                         'quantity' => $cart->qty,
                         'price' =>$cart->total,
                         'subtotal' => $total,

                     ];

                return json_encode($data);
    }

    public function minus_cart_quantity(Request $request)
    {
        if($request->quantity > 0){
                $cart_id = $request->cart_id;
                $quantity = $request->quantity - 1;
                $total = 0;
                $userID = auth()->user()->id;

                $cart = CartItem::where('id', $cart_id)->first();
                $cart->qty = $quantity;
                $cart->total = $cart->price * $quantity;
                $cart->save();

                $cartItems = CartItem::where(['user_id' => auth()->user()->id,'status' => 1])->get();
                        
                        foreach($cartItems as $cartitem){
                            $total = $total + $cartitem->total;
                        }
                
                
                $data['new'] = [
                                'code' => 1,
                                'quantity' => $cart->qty,
                                'price' =>$cart->total,
                                'subtotal' => $total,

                            ];

                        return json_encode($data);
        }
    }
}
