<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Brand;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(Category $category)
    {
        // return $category;
        // if(empty($category)) {
        //     $category = Category::first();
        // }
        $categories = Category::all();

        return view('category.index', compact('category', 'categories'));
    }

    public function search_by_brand() {

    }
}
