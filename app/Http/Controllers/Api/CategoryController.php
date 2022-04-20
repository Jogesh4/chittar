<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Banner;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::all();

        return response()->json(['success' => true, 'categories' => $categories]);
    }

    public function banner(Request $request)
    {
        $banners = Banner::all();

        return response()->json(['success' => true, 'banner' => $banners]);
    }
}
