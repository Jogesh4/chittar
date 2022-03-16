<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\CartItem;

class CartController extends Controller
{

    public function index()
    {
        return view('cart.index');
    }

    public function add_to_cart(Request $request, Item $item)
    {
        $userID = auth()->user()->id;
        \Cart::session($userID)->add(array(
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $item
        ));
        
        $cartItem = new CartItem;
        $cartItem->qty = 1;
        $cartItem->item_id = $item->id;
        $cartItem->user_id = $userID;
        $cartItem->save();

        return redirect()->back();
    }

    public function remove_from_cart()
    {
        $userID = auth()->user()->id;
        \Cart::session($userID)->clear();

        $cartItems = CartItem::where('user_id', $userID)->get();
        foreach($cartItems as $item) {
            $item->delete();
        }

        return redirect()->back();
    }
}
