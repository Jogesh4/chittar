<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;
use App\Models\CartItem;


class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories = Category::where('is_active', 1)->get();
        $items = Item::where('is_active', 1)->take(10)->get();
        $currentCategoryId=$categories[0]->id;
        $currentCategoryName=$categories[0]->name;
        if($request->category_id){
            $currentCategoryId=$request->category_id;
            // $currentCategoryName=$request->category;
            $categoryItems = Item::where('category_id', $currentCategoryId)->get();
             $data['new'] = [
                         'code' => 1,
                         'items' => $categoryItems,
                     ];

                return json_encode($data);
        }
        else{
          $categoryItems = Item::where('category_id', $currentCategoryId)->get();
        }

        // dd($categoryItems);

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

        return view('welcome', compact('categories', 'items', 'currentCategoryId', 'currentCategoryName', 'categoryItems'));
    }
}
