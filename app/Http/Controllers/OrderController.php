<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
  public function place(Request $request)
  {
    $userID = auth()->user()->id;
    $order = new Order;
    $order->transaction = md5($userID.\Carbon\Carbon::now());
    $order->amount = \Cart::session($userID)->getTotal();
    $order->user_id = $userID;
    $order->status = "PAID";
    
    if($order->save()){
      $cartCollection = \Cart::session($userID)->getContent();
      foreach($cartCollection as $row){
          $orderItem = new OrderItem;
          $orderItem->name = $row->name;
          $orderItem->image = $row->image;
          $orderItem->size = $row->weight;
          $orderItem->price = $row->price;
          $orderItem->qty = $row->quantity;
          $orderItem->item_id = $row->id;
          $orderItem->order_id = $order->id;
          $orderItem->save();
      }
      $order->items = $cartCollection->count();
      $order->save();
    }

    $order->order_no = 'ORD0000' . $order->id;
    $order->save();

    \Cart::session($userID)->clear();

    return redirect()->route('user_dashboard');
  }

  public function cancel(Request $request, Order $order)
  {
    $order->status = 'CANCELLED';
    $order->save();

    return redirect()->back();
  }
}
