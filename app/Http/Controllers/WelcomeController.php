<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;

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
            $currentCategoryName=$request->category;
        }
        $categoryItems = Item::where('category_id', $currentCategoryId)->get();
        return view('welcome', compact('categories', 'items', 'currentCategoryId', 'currentCategoryName', 'categoryItems'));
    }
}
