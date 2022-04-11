<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\CartItem;
use App\Models\Item;

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
            $cartItem->qty = 1;
            $cartItem->name = $item->name;
            $cartItem->image = $item->image;
            $cartItem->price = $item->price;
            $cartItem->total = $item->price;
            $cartItem->item_id = $item->id;
            $cartItem->user_id = $userID;
            $cartItem->status = 1;
            $cartItem->save();

            $final_out[] = $cartItem;

            return response()->json(['success' => true,'message' => 'added to cart','cart' => $final_out]);
        }
        else{
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
             return response()->json(['success' => false,'message' => 'Cart is Empty','cart' => $cart]);
         }

    }

}
