<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Category;
use App\Models\CartItem;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $category_name = "";
        if(!empty($request->category)){
            $category = Category::where('name', 'like', $request->category.'%')->first();
            $category_name = $category->name;
           $items = Item::where('category_id',$category->id)->where('is_active',1)->take(10)->get();
        }
        else if(!empty($request->name)){
            $items = Item::where('name', 'like', $request->name.'%')->where('is_active',1)->take(10)->get();
        }
        else{
            $items = Item::where('is_active',1)->take(10)->get();
        }
        $categories = Category::where('is_active', 1)->get();
        $recent_items = Item::where('is_active',1)->take(5)->get();
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

        return view('search.index', compact('items','categories','recent_items','category_name'));
    }
}
