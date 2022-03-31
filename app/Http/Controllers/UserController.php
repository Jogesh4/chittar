<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Favorite;
use App\Models\CartItem;


class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
       if(!empty(auth()->user()->id)){
           $user = User::where('id',auth()->user()->id)->first();
           $order = Order::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->first();
           $orderitems = OrderItem::where('order_id',$order->id)->get();

           return view('user.dashboard',compact('user','order','orderitems'));
       }
       else{
            return redirect()->route('login');
       }
        
    }

    public function profile(Request $request)
    {
        if(!empty(auth()->user()->id)){
           $user = User::where('id',auth()->user()->id)->first();
           return view('user.profile',compact('user'));
       }
       else{
            return redirect()->route('login');
       }
    }

    public function order_list(Request $request)
    {
           $orders = Order::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();

        return view('user.order_list',compact('orders'));
    }

    public function order_detail($id)
    { 
       if(!empty(auth()->user()->id)){
           $user = User::where('id',auth()->user()->id)->first();
           $order = Order::where('id',$id)->orderBy('id', 'DESC')->first();
           $orderitems = OrderItem::where('order_id',$order->id)->get();

           return view('user.order_detail',compact('user','order','orderitems'));
       }
       else{
            return redirect()->route('login');
       }
        
    }

    public function last_order(Request $request)
    {
      $order = Order::where('user_id',auth()->user()->id)->latest();
      $orderitems = OrderItem::where('order_id',$order->id)->get();

        return view('user.last_order',compact('order','orderitems'));
    }

    public function cart(Request $request)
    {
        return view('user.cart');
    }

     public function favorite(Request $request){
         
        $favorites = Favorite::where('user_id',auth()->user()->id)->get();

        if(auth()->check()){
        \Cart::clear();
         \Cart::session(auth()->user()->id)->clear();
        $carts = CartItem::where(['user_id'=>auth()->user()->id,'status' => 1])->get();
          foreach($carts as $cart){
            \Cart::session(auth()->user()->id)->add(array(
                'id' => $cart->item_id,
                'name' => "fvfdv",
                'price' => 34,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => array()
            ));
        }
    }
         
        return view('user.favorite',compact('favorites'));
     }

}
