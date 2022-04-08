<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;
use App\Models\CartItem;
use App\Models\Review;
use App\Models\Variant;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $final_out = [];
        $categories = Category::where('is_active', 1)->get();
        $items = Item::where('is_active', 1)->take(10)->get();
        $currentCategoryId=$categories[0]->id;
        $currentCategoryName=$categories[0]->name;

        foreach($items as $item){
              $out['items'] = $item;

              $reviews = Review::where('item_id',$item->id)->get();

              $out['review_count'] = $reviews->count();

              $out['variants'] = Variant::where('item_id',$item->id)->get();

              $final_out[] = $out; 
        }
        
        if($request->category_id){
            $currentCategoryId=$request->category_id;
            // $currentCategoryName=$request->category;
            $categoryItems = Item::where('category_id', $currentCategoryId)->where('is_active',1)->get();
             $data['new'] = [
                         'code' => 1,
                         'items' => $categoryItems,
                     ];

                return json_encode($data);
        }
        else{
          $categoryItems = Item::where('category_id', $currentCategoryId)->where('is_active',1)->get();
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
        //   dd($final_out);
        return view('welcome', compact('categories', 'items', 'currentCategoryId', 'currentCategoryName', 'categoryItems','final_out'));
    }
}
