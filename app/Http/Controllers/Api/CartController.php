<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Item;
use App\Models\Variant;

class CartController extends Controller
{
  
  public function add_to_cart(Request $request)
    {
        $final_out = array();
        $userID = $request->user_id;

        $item = Item::where('id',$request->item_id)->first();

        $cart = CartItem::where(['item_id'=>$item->id,'user_id'=>$userID,'status' => 1])->first();

        if(!$cart){
            $cartItem = new CartItem;
            $cartItem->qty = $request->quantity;
            $cartItem->name = $item->name;
            $cartItem->image = $item->image;
            $cartItem->price = $item->price;
            $cartItem->total = $item->price * $request->quantity;
            $cartItem->item_id = $item->id;
            $cartItem->user_id = $userID;
            $cartItem->status = 1;
            // $cartItem->save();
            
            if(!empty($request->variant_id)){
                 $variant = Variant::where('id',$request->variant_id)->first();
                 $cartItem->size = $variant->type;
                 $cartItem->color = $variant->variant_name;
                 $cartItem->price = $variant->price;
                 $cartItem->total = $variant->price * $request->quantity;
                 $cartItem->variant_id = $variant->id;
            }
            $cartItem->save();

            $final_out[] = $cartItem;

            return response()->json(['success' => true,'message' => 'added to cart','cart' => $final_out]);
        }
        else{
            
            $cart->qty = $request->quantity;
            $cart->total = $item->price * $request->quantity;
            $cart->save();

            $final_out[] = $cart;

            return response()->json(['success' => false,'message' => 'already added to cart','cart' => $final_out]);
        }

    }

    public function view_cart(Request $request){
         $userID = $request->user_id;

         $cart = CartItem::where(['user_id'=>$userID,'status' => 1])->get();

         if(!empty($cart)){
             return response()->json(['success' => true,'message' => 'View Cart','cart' => $cart]);
         }
         else{
             return response()->json(['success' => false,'message' => 'Cart is Empty','cart' => []]);
         }

    }

    public function update_cart(Request $request){

         $cart = CartItem::where(['id'=>$request->cart_id])->first();

         if($cart){
             $cart->qty = $request->quantity;
             $cart->total = $cart->price * $request->quantity;
             $cart->save();

             return response()->json(['success' => true,'message' => 'Update Cart','cart' => $cart]);
         }
         else{
             return response()->json(['success' => false,'message' => 'Cart is Empty','cart' => []]);
         }

    }

    public function delete_cart(Request $request){
        $userID = $request->user_id;
        // \Cart::session($userID)->clear();

        $cartItems = CartItem::where('user_id', $userID)->get();
        foreach($cartItems as $item) {
            $item->delete();
        }

          return response()->json(['success' => true,'message' => 'Cart deleted Successfully']);
    }

    public function remove_item_from_cart(Request $request)
    {
        $cart_id = $request->cart_id;
        $userID = $request->user_id;
        // \Cart::session($userID)->remove($cart_id);

        $cartItem = CartItem::where(['id'=> $cart_id,'user_id' => $userID])->delete();

        $cart = CartItem::where(['user_id'=>$userID,'status' => 1])->get();

        if($cartItem){
             return response()->json(['success' => true,'message' => 'Item removed from Cart','cart' => $cart]);
        }
        else{
             return response()->json(['success' => false,'message' => 'Item is not removed','cart' => $cart]);
        }
    }

}
