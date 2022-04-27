<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Variant;
use App\Models\Favorite;
use DB;

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
            $items = Item::where('id',$request->id)->get();

            if(!empty($items)) {

                foreach($items as $item){
                     $out['id'] = $item->id;
                     $out['type'] = $item->type;
                     $out['name'] = $item->name;
                     $out['slug'] = $item->slug;
                     $out['description'] = $item->description;
                     $out['model'] = $item->model;
                     $out['tax_category'] = $item->tax_category;
                     $out['condition'] = $item->condition;
                     $out['warranty'] = $item->warranty;
                     $out['return'] = $item->return;
                     $out['track_inventory'] = $item->track_inventory;
                     $out['selling_at'] = $item->selling_at;
                     $out['continue_selling_when_stock_out'] = $item->continue_selling_when_stock_out;
                     $out['cash_on_delivery'] = $item->cash_on_delivery;
                     $out['gift_wrap'] = $item->gift_wrap;
                     $out['min_purchase_qty'] = $item->min_purchase_qty;
                     $out['max_purchase_qty'] = $item->max_purchase_qty;
                     $out['price'] = $item->price;
                     $out['sale_price'] = $item->sale_price;
                     $out['stock_alert_qty'] = $item->stock_alert_qty;
                     $out['has_multiple_options'] = $item->has_multiple_options;
                     $out['country_of_origin'] = $item->country_of_origin;
                     $out['weight_unit'] = $item->weight_unit;
                     $out['weight'] = $item->weight;
                     $out['isbn'] = $item->isbn;
                     $out['hsn'] = $item->hsn;
                     $out['sac'] = $item->sac;
                     $out['upc'] = $item->upc;
                     $out['image'] = $item->image;
                     $out['image1'] = $item->image1;
                     $out['image2'] = $item->image2;
                     $out['image3'] = $item->image3;
                     $out['image4'] = $item->image4;
                     $out['video'] = $item->video;
                     $out['is_active'] = $item->is_active;
                     $out['category_id'] = $item->category_id;
                     $out['brand_id'] = $item->brand_id;
                     $out['variant'] = Variant::where('item_id',$item->id)->get();
                     $out['created_at'] = $item->created_at;

                     $final_out[] = $out;
                 }
                //  $variant = Variant::where('item_id',$request->id)->get();

                return response()->json(['success' => true, 'item' => $final_out]);
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

    
            $favorites = Favorite::where(['user_id' => $request->user_id])->get();


            if(!empty($favorites)){

                 foreach($favorites as $fav){
                     $out['id'] = $fav->id;
                     $out['user_id'] = $fav->user_id;
                     $out['item_id'] = $fav->item_id;
                     $out['item'] = Item::where('id',$fav->item_id)->first();
                     $out['created_at'] = $fav->created_at;

                     $final_out[] = $out;
                 }

                return response()->json(['success' => true, 'wishlist' => $final_out]);
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
