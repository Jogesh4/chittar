<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use App\Models\Item;
use App\Models\Address;
use App\Models\User;
use App\Models\Shipping;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use Razorpay\Api\Api;
use DB;

class OrderController extends Controller
{
  public function place(Request $request)
  {
    $userID = auth()->user()->id;
    $user = User::where('id',$userID)->first();

    if($request->address_radio == '2'){
        $address = new Address;
        $address->user_id = $userID;
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
    }

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
  if($request->address_radio == '2'){
    $order->billing_address = $address->id;
  }
  else{
    $order->billing_address = session()->get('shipping_id');
  }
    $order->status = $request->payment_type;
    $order->order_status = 0;
    
    if($order->save()){
      foreach($cartItems as $row){

         $item = Item::where('id',$row->item_id)->first();

          $orderItem = new OrderItem;
          $orderItem->name = $row->name;
          $orderItem->image = $row->image;
          $orderItem->size = $row->size;
          $orderItem->color = $row->color;
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

    $shipping_address = Address::where('id',$order->shipping_address)->first();
    $billing_address = Address::where('id',$order->billing_address)->first();

    $shipping = Shipping::where('pincode',$shipping_address->pincode)->first();
    if($shipping){
        $order->shipping_price = $shipping->price;
        $order->amount = $total + $shipping->price;
    }
    else{
         $order->shipping_price = 100;
        $order->amount = $total + 100;
    }

    $order->save();

    Mail::to($user->email)->send(new OrderMail($order,$shipping_address,$billing_address));

    $cartItem = CartItem::where(['user_id' => auth()->user()->id])->update(["status" => 0]);

    \Cart::session($userID)->clear();

    $last_order = DB::table('orders')
                    ->where('orders.user_id', '=', $userID)
                    ->orderBy('orders.id', 'DESC')
                    ->first();
    // Razorpay Transaction
                $api = new Api('rzp_test_6H6AUtBZCXyatL', 'MByNkzz8MybQMZ8q8RR2KfUD');

                // RazorpayOrder
                $RazorpayOrder  = $api->order->create(array('receipt' => 'order_rcptid_'.$last_order->id, 'amount' => $last_order->amount * 100, 'currency' => 'INR')); // Creates RazorpayOrder
                $orderId = $RazorpayOrder['id']; // Get the created RazorpayOrder ID
                $RazorpayOrder  = $api->order->fetch($orderId);
                $payments = $api->order->fetch($orderId)->payments();

    $data['new'] = [
                         'code' => 1,
                         'order' => $order,
                         'orderId' => $orderId,

                     ];

                return json_encode($data);

    // return redirect()->route('user_dashboard');
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

      if(!empty($request->shipaddress_id)){
          $address = Address::where('id',$request->shipaddress_id)->first();

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

          return back();
      }
      else{
            $address = new Address;
      }
      
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

      $shipping = Shipping::where('pincode',$address->pincode)->first();

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

      return view('cart.payment',compact('address','shipping'));
  }

  public function update_order_status(Request $request){

       $order = Order::where('id',$request->OrderID)->first();
       $order->razorpay_order_id = $request->razorpay_order_id;
       $order->razorpay_payment_id = $request->razorpay_payment_id;
       $order->razorpay_signature = $request->razorpay_signature;

       if($order->save()){
                $data['code'] = 200;
                $data['result'] = 'success';
                $data['message'] = 'Action completed';
       }
       

  }

}
