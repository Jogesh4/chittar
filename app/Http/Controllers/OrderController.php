<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use App\Models\Item;
use App\Models\Address;
use Symfony\Component\HttpFoundation\Session\Session;

class OrderController extends Controller
{
  public function place(Request $request)
  {
    $userID = auth()->user()->id;
     $total = 0;
    $cartItems = CartItem::where(['user_id' => auth()->user()->id,'status' => 1])->get();
  
              foreach($cartItems as $cartitem){
                      $total = $total + $cartitem->total;
                }

    $order = new Order;
    $order->transaction = md5($userID.\Carbon\Carbon::now());
    $order->amount = $total;
    $order->user_id = $userID;
    $order->shipping_address = session()->get('shipping_id');
    $order->billing_address = session()->get('shipping_id');
    $order->status = "PAID";
    
    if($order->save()){
      foreach($cartItems as $row){

         $item = Item::where('id',$row->item_id)->first();

          $orderItem = new OrderItem;
          $orderItem->name = $row->name;
          $orderItem->image = $row->image;
          $orderItem->size = $item->weight;
          $orderItem->price = $row->price;
          $orderItem->qty = $row->qty;
          $orderItem->item_id = $row->item_id;
          $orderItem->order_id = $order->id;
          $orderItem->save();
      }
      $order->items = $cartItems->count();
      $order->save();
    }

    $order->order_no = 'ORD0000' . $order->id;
    $order->save();

    $cartItem = CartItem::where(['user_id' => auth()->user()->id])->update(["status" => 0]);

    \Cart::session($userID)->clear();

    return redirect()->route('user_dashboard');
  }

  public function cancel(Request $request, Order $order)
  {
    $order->status = 'CANCELLED';
    $order->save();

    return redirect()->back();
  }

  public function address(Request $request){
       
      $user_id = auth()->user()->id;

      $addresses = Address::where('user_id',$user_id)->get();

      if(auth()->check()){
        \Cart::clear();
         \Cart::session(auth()->user()->id)->clear();
        $carts = CartItem::where(['user_id'=>auth()->user()->id,'status' => 1])->get();
          foreach($carts as $cart){
            \Cart::session(auth()->user()->id)->add(array(
                'id' => $cart->item_id,
                'name' => $cart->name,
                'price' => $cart->price,
                'quantity' => $cart->qty,
                'attributes' => array(),
                'associatedModel' => $cart
            ));
        }
    }

      return view('cart.address',compact('addresses'));
  }

  public function save_address(Request $request){
       
      $user_id = auth()->user()->id;

      $address = new Address;
      $address->user_id = $user_id;
      $address->phone = $request->phone;
      $address->firstname = $request->first_name;
      $address->lastname = $request->last_name;
      $address->address = $request->address;
      $address->city = $request->city;
      $address->state = $request->state;
      $address->country = $request->country;
      $address->pincode = $request->pincode;
      $address->locality = $request->locality;
      $address->save();

      $addresses = Address::where('user_id',$user_id)->get();


      return redirect()->route('select.address');
  }

  public function payment($id){
       
      $user_id = auth()->user()->id;

      session()->put('shipping_id',$id);

      $address = Address::where('id',$id)->first();

      if(auth()->check()){
        \Cart::clear();
         \Cart::session(auth()->user()->id)->clear();
        $carts = CartItem::where(['user_id'=>auth()->user()->id,'status' => 1])->get();
          foreach($carts as $cart){
            \Cart::session(auth()->user()->id)->add(array(
                'id' => $cart->item_id,
                'name' => $cart->name,
                'price' => $cart->price,
                'quantity' => $cart->qty,
                'attributes' => array(),
                'associatedModel' => $cart
            ));
        }
    }

      return view('cart.payment',compact('address'));
  }

}
