<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

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
}
