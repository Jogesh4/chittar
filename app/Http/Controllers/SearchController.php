<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('name', 'like', $request->name.'%')->take(10)->get();
        return view('search.index', compact('items'));
    }
}
