<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Category;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::where('name', 'like', $request->name.'%')->take(10)->get();
        $categories = Category::where('is_active', 1)->get();

        return view('search.index', compact('items','categories'));
    }
}
