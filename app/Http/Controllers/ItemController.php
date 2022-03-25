<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Favorite;

class ItemController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $similar_items = Item::where('category_id', '!=', $item->category_id)->take(8)->get();
        return view('item.show', compact('item', 'similar_items'));
    }

    public function add_favorite(Request $request){

        if(!empty(auth()->user()->id)){
            $fav = Favorite::where(['item_id' => $request->item_id,'user_id' => auth()->user()->id])->first();

            if(!$fav){
                $favorite = new Favorite();
                $favorite->item_id = $request->item_id;
                $favorite->user_id = auth()->user()->id;
                $favorite->save();
            }

            return 1;
        }
        else{
            return redirect()->route('login');
        }

    }
}
