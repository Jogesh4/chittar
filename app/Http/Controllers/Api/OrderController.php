<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

class OrderController extends Controller
{
  public function place(Request $request)
  {
    $userID = $request->user_id;
    $order = new Order;
    $order->transaction = md5($userID.\Carbon\Carbon::now());
    $order->amount = $request->amount;
    $order->user_id = $userID;
    $order->items = count($request->cartCollection);
    $order->status = "PAID";
    
    if($order->save()){
      $cartCollection = $request->cartCollection;
      foreach($cartCollection as $row){
        $orderItem = new OrderItem;
        $orderItem->price = $row['price'];
        $orderItem->qty = $row['quantity'];
        $orderItem->item_id = $row['item_id'];
        $orderItem->order_id = $order->id;
        $orderItem->save();
      }

      $order->order_no = 'ORD0000' . $order->id;
      $order->save();

      return response()->json(['success' => true, 'order' => $order]);
    }

    return response()->json(['success' => false, 'message' => 'Failed to create order']);
  }

  public function userOrders(Request $request)
  {
    $user = User::find($request->user_id);
    
    if($user){
      return response(['success' => true, 'orders' => $user->orders]);
    }

    return response()->json(['success' => false, 'message' => 'User does not exist']);
  }
}
