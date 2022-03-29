<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Item;

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
}
