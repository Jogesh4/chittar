<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Variant;

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
                return response()->json(['success' => true, 'item' => $item]);
            }
            return response()->json(['success' => false, 'message' => 'Item not found']);
        } else {
            return response()->json(['success' => false, 'message' => 'Item ID is required']);
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
