<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Address;

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

   public function add_address(Request $request){

         $user_id = $request->user_id;

      if(!empty($request->address_id)){
          $address = Address::where('id',$request->address_id)->first();
      }
      else{
            $address = new Address;
      }
      
      $address->user_id = $user_id;
      $address->phone = !empty($request->phone) ? $request->phone : Null;
      $address->firstname = !empty($request->first_name) ? $request->first_name : Null;
      $address->lastname = !empty($request->last_name) ? $request->last_name : Null;
      $address->address = !empty($request->address) ? $request->address : Null;
      $address->city = !empty($request->city) ? $request->city : Null;
      $address->state = !empty($request->state) ? $request->state : Null;
      $address->country = !empty($request->country) ? $request->country : Null;
      $address->pincode = !empty($request->pincode) ? $request->pincode : Null;
      $address->locality = !empty($request->locality) ? $request->locality : Null;
      $address->save();

      if($address->save()){
            return response(['success' => true, 'address' => $address]);
      }
      else{
            return response()->json(['success' => false,'message' => 'address not save']);
      }
      
   }

   public function view_address(Request $request){
        
         $user_id = $request->user_id;

         $address = Address::where('user_id',$user_id)->get();

          if($address){
            return response(['success' => true, 'address' => $address]);
          }
          else{
                return response()->json(['success' => false,'message' => 'address not Found','address' => []]);
          }
   }


}
