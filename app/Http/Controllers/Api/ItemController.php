<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Variant;
use App\Models\Favorite;

class ItemController extends Controller
{
    public function itemsByCategory(Request $request)
    {
        if($request->has('category_id')){
            $items = Item::where('category_id', $request->category_id)->get();
            return response()->json(['success' => true, 'items' => $items]);
        } else {
            return response()->json(['success' => false, 'message' => 'Category ID is required']);
        }
    }

    public function itemByID(Request $request)
    {
        if($request->has('id')){
            // $item = Item::find($request->id);
            $item = Item::where('id',$request->id)->get();

            if($item) {
                 $variant = Variant::where('item_id',$request->id)->get();

                return response()->json(['success' => true, 'item' => $item, 'variant' => $variant]);
            }
            return response()->json(['success' => false, 'message' => 'Item not found']);
        } else {
            return response()->json(['success' => false, 'message' => 'Item ID is required']);
        }
    }

    public function add_wishlist(Request $request){

    
            $fav = Favorite::where(['item_id' => $request->item_id,'user_id' => $request->user_id])->first();

            if(!$fav){
                $favorite = new Favorite();
                $favorite->item_id = $request->item_id;
                $favorite->user_id = $request->user_id;
                $favorite->save();

                $wishlist = Favorite::where(['user_id' => $request->user_id])->get();

                return response()->json(['success' => true, 'wishlist' => $wishlist]);
            }
            else{
                 return response()->json(['success' => false, 'message' => 'already exit in wishlist']);
            }
    }

    public function get_wishlist(Request $request){

    
            $fav = Favorite::where(['user_id' => $request->user_id])->get();

            if(!empty($fav)){
                return response()->json(['success' => true, 'wishlist' => $fav]);
            }
            else{
                 return response()->json(['success' => false, 'message' => 'No item in wishlist']);
            }
    }

    public function get_variant(Request $request)
    {
        if($request->has('item_id')){
            // $item = Item::find($request->id);
            $variant = Variant::where('item_id',$request->item_id)->get();

            if($variant) {
                return response()->json(['success' => true, 'variant' => $variant]);
            }
            return response()->json(['success' => false, 'message' => 'Variant not found']);
        } else {
            return response()->json(['success' => false, 'message' => 'Item ID is required']);
        }
    }
}
